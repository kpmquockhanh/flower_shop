<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryFlower;
use App\Flower;
use Illuminate\Http\Request;
include 'simple_html_dom.php';

class CrawlerController extends Controller
{
    public $baseUrls = [
        'https://hoayeuthuong.com/dien-hoa.aspx',
        'https://hoayeuthuong.com/cua-hang-hoa.aspx',
        'https://hoayeuthuong.com/hoa-tuoi.aspx',
    ];
    public function index()
    {


        $viewData = [
            'links' => $this->getListCate($this->baseUrls),
        ];

        return view('backend.flowers.crawler.list')->with($viewData);
    }

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
                        'link' => $this->getFullPath($link->href,$baseUrl),
                        'count' => $cateflowers = CategoryFlower::with('flower')->where('category_id', $catetogory->id)->count(),
                        'name' => $catetogory->cate_name,
                    ];
                else
                    $linkUrls[] = [
                        'link' => $this->getFullPath($link->href,$baseUrl),
                        'count' => 0,
                        'name' => $slug,
                    ];
            }
        }
        return $linkUrls;
    }
    public function crawl(Request $request)
    {
        if ($request->index == null)
//            return response()->json([
//                'status' => false,
//            ]);
            return response()->json([
                'status' => false
            ]);

        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '-1');


        $listCates = $this->getListCate($this->baseUrls);
        $itemLink = $listCates[$request->index];

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

        $pIndex = 1;
        do
        {
            $crawlData = (json_decode($this->requestGetFlower($url, '{"catId":"'.$cateId.'","pIndex":'.$pIndex++.',"orderQuery":"","lang":"vn"}')));

            foreach($crawlData->dataItem as $item)
            {
                //Detail
                $content = $this->getPage($this->getFullPath($item->LinkItem, $baseUrl));

                $data['link'] = $this->getFullPath($item->LinkItem, $baseUrl);

                $img = $content->find('.l_item .t_item img',0)->attr['data-original'];
                $data['image'] = time();
                $data['image'] .= '.jpg';

                $regex = '/(\d+\.?)+/';
                if ($domOld = $content->find('.l_item .b_item .single .old',0))
                {
                    if (preg_match($regex, $domOld->plaintext, $matches))
                        $data['price'] = str_replace('.','',$matches[0]);
                }
                else continue;
                if ($domNew = $content->find('.l_item .b_item .single .new span',0))
                {
                    if (preg_match($regex, $domNew->plaintext, $matches))
                        $data['sale_price'] = str_replace('.','',$matches[0]);

                }

                $data['name'] = explode(' - ', trim($content->find('.r_item h1',0)->plaintext))[1];
                $data['category'] = explode(' - ', trim($content->find('.r_item h1',0)->plaintext))[0];
                $data['message'] = trim($content->find('.r_item .desc',0)->plaintext);
                $data['slug'] = str_slug($data['name']);
                $data['saleoff'] = 0;
                $data['quantity'] = 0;
                $data['admin_id'] = 1;
                $data['show'] = 1;
                if (!isset($data['price']))
                    $data['price'] = 0;
                if(!$flower = Flower::query()->where('slug', str_slug($data['name']))->first())
                {
                    try{
                        $this->downloadImage($img,$data['image']);
//                        file_put_contents('images/'.$data['image'], file_get_contents($img));
                        $flower = Flower::query()->create($data);

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
                    }catch (\Exception $e)
                    {
                        return response()->json([
                            'status' => false
                        ]);
                    }
                }
            }
        }while($crawlData->dataItem);

        return response()->json([
            'status' => true,
            'data' => view('backend.flowers.crawler.tr') ->with(['link'=> $this->getCate(str_slug($itemLink['name']), $itemLink['link'])])->render()
        ]);

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

    public function getFullPath($url, $baseUrl)
    {
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
            dump("Failed");
        }
    }
    public function getListBySelector($html, string $selector)
    {
        return $html->find($selector);
    }

    public function getData( $html, string $selector, bool $multiple = true)
    {

        if ($multiple)
        {
            $result = null;

            $datas = $html->find($selector);
            foreach ($datas as $item)
            {
                $result .= $item->plaintext.' ';
            }
            return trim($result);
        }
        else
        {
            return $html->find($selector,0)->plaintext;
        }

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
