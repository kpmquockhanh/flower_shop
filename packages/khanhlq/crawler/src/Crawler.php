<?php
/**
 * Created by PhpStorm.
 * User: kpmqu
 * Date: 2/12/2018
 * Time: 1:53 AM
 */

namespace Khanhlq\Crawler;

use App\Category;
use App\CategoryFlower;
use App\Flower;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;

class Crawler
{
    public $baseUrls = [
        'https://hoayeuthuong.com/dien-hoa.aspx',
        'https://hoayeuthuong.com/cua-hang-hoa.aspx',
        'https://hoayeuthuong.com/hoa-tuoi.aspx',
    ];



    public function getListCate(array $baseUrls)
    {

        $categories = Category::query()->get();

        foreach ($baseUrls as $baseUrl)
        {
            $html = $this->getPage($baseUrl);

            //get link list category
            $links = $this->getListBySelector($html,'div.r_nav ul li a');
            foreach ($links as $link)
            {

                $slug = str_slug(trim($link->plaintext));

                $catetogory = $categories->where('cate_code', $slug)->first();

                if ($catetogory)
                    $linkUrls[] = [
                        'link' => $this->getFullPath($link->href),
                        'count' => $cateflowers = CategoryFlower::with('flower')->where('category_id', $catetogory->id)->count(),
                        'name' => $catetogory->cate_name,
                    ];
                else
                    $linkUrls[] = [
                        'link' => $this->getFullPath($link->href),
                        'count' => 0,
                        'name' => $slug,
                    ];
            }
        }
        return $linkUrls;
    }
    public function crawl($index)
    {
        if ($index == null)
            return [
                'status' => false
            ];

        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '-1');


        $listCates = $this->getListCate($this->baseUrls);
        $itemLink = $listCates[$index];

        $baseUrl = ($itemLink['link']);


        $html = $this->getPage($baseUrl);

        if ($dom = $html->find('#ctl00_cphContent_hdfGroupId',0))
            $cateId = $dom->getAttribute('value');
        else
            $cateId = ($html->find('#ctl00_cphContent_hdfKeyword',0)->getAttribute('value'));

        if (is_numeric($cateId))
            $url = 'https://hoayeuthuong.com/ajax/ProGroupHandler.ashx';
        else
            $url = 'https://hoayeuthuong.com/ajax/ProKeywordHandler.ashx';

        foreach ($html->find('.items .item .i a') as $flower)
        {
            $data = $this->getData($flower->href);

            if ($data['price'] = 0) continue;

            if (!$this->createFlower($data))
                return [
                    'status' => false
                ];
        }

        $pIndex = 1;

        do
        {
            $crawlData = (json_decode($this->requestGetFlower($url, '{"catId":"'.$cateId.'","pIndex":'.$pIndex++.',"orderQuery":"","lang":"vn"}')));

            foreach($crawlData->dataItem as $item)
            {
                //Detail

                $data = ($this->getData($item->LinkItem));
                if ($data['price'] = 0) continue;

                if (!$this->createFlower($data))
                    return [
                        'status' => false
                    ];
            }
        }while($crawlData->dataItem);

        return [
            'status' => true,
            'data' => $this->getCate(str_slug($itemLink['name']), $itemLink['link'])
        ];

    }
    public function createFlower($data)
    {
        try{
            if(!$flower = Flower::query()->where('slug', str_slug($data['name']))->first())
            {
                $this->downloadImage($data['img_link'],$data['image']);

                $flower = Flower::query()->create($data);

            }

            if(!$cate = Category::query()->where('cate_code', str_slug($data['category']))->first())
            {
                $cate = Category::query()->create([
                    'cate_name' => $data['category'],
                    'cate_code' => str_slug($data['category']),
                ]);
            }

            if(!CategoryFlower::query()->where('flower_id', $flower->id)->where('category_id', $cate->id)->first())
            {
                CategoryFlower::query()->create([
                    'flower_id' => $flower->id,
                    'category_id' => $cate->id,
                ]);
            }
            return true;

        }catch (\Exception $e)
        {
            return false;
        }
    }

    public function getCate($slug, $link)
    {
        $categories = Category::query();

        $catetogory = $categories->where('cate_code', $slug)->first();

        if ($catetogory)
            return [
                'link' => $link,
                'count' => CategoryFlower::with('flower')->where('category_id', $catetogory->id)->count(),
                'name' => $catetogory->cate_name,
            ];
        else
            return [
                'link' => $link,
                'count' => 0,
                'name' => "Chưa có",
            ];
    }

    public function getFullPath($url)
    {
        $baseUrl = 'https://hoayeuthuong.com/ajax/ProKeywordHandler.ashx';
        if (!$this->isUrl($url))
        {
            $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})\//';
            $matches = [];
            if (preg_match($regex, $baseUrl, $matches))
            {
                return $matches[0].($url[0]=='/'?substr($url,1):$url);
            }


        }
        return null;
    }

    public function isUrl($string)
    {
        return filter_var($string, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED);
    }

    public function downloadImage(string $url, string $name)
    {
        file_put_contents('images/'.$name, file_get_contents($url));
    }
    public function getPage($baseURL)
    {
        try
        {
            return file_get_html($baseURL);
        }catch(\Exception $e)
        {
            return null;
        }
    }
    public function getListBySelector($html, string $selector)
    {
        return $html->find($selector);
    }

    public function getData($link)
    {

        $content = $this->getPage($this->getFullPath($link));

        $data['link'] = $this->getFullPath($link);

        $data['image'] = time().'.jpg';

        $regex = '/(\d+\.?)+/';
        if ($domOld = $content->find('.l_item .b_item .single .old',0))
        {
            if (preg_match($regex, $domOld->plaintext, $matches))
                $data['price'] = str_replace('.','',$matches[0]);
        }
        if ($domNew = $content->find('.l_item .b_item .single .new span',0))
        {
            if (preg_match($regex, $domNew->plaintext, $matches))
                $data['sale_price'] = str_replace('.','',$matches[0]);
        }

        $data['saleoff'] = 0;
        if (isset($data['sale_price']) && isset($data['price']))
            if ($data['sale_price']!=0 && $data['price'] !=0)
                $data['saleoff'] = round(1-($data['sale_price']/$data['price']), 2);

        $data['name'] = explode(' - ', trim($content->find('.r_item h1',0)->plaintext))[1];
        $data['category'] = explode(' - ', trim($content->find('.r_item h1',0)->plaintext))[0];
        $data['message'] = trim($content->find('.r_item .desc',0)->plaintext);
        $data['slug'] = str_slug($data['name']);
        $data['quantity'] = 0;
        $data['admin_id'] = Auth::guard('admin')->id();
        $data['show'] = 1;
        if (!isset($data['price']))
            $data['price'] = 0;
        $data['img_link'] = $content->find('.l_item .t_item img',0)->attr['data-original'];

        return $data;
    }

    public function requestGetFlower($url, $data)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,  $data);
        $output = curl_exec($ch);
        curl_close($ch);

        return $output;
    }
}