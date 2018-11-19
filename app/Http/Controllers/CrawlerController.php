<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryFlower;
use App\Flower;
use Illuminate\Http\Request;
include 'simple_html_dom.php';

class CrawlerController extends Controller
{
    public function index()
    {
        ini_set('max_execution_time', 0);
        $baseUrl = 'https://hoayeuthuong.com/dien-hoa.aspx';

        try
        {
            $html = file_get_html($baseUrl);
        }catch(\Exception $e)
        {
            dump("Failed");
        }

        //get link list category
        $links = $html->find('div.r_nav ul li a');

        foreach ($links as $link)
        {
            //Link category
            $link =  $this->getFullPath($link->href, $baseUrl);

            try
            {
                $html = file_get_html($link);
            }catch(\Exception $e)
            {
                dump("Failed");
            }


            foreach($html->find('#data_items .items .item .i a') as $item)
            {
                //Detail
//                dump($this->getFullPath($item->href, $baseUrl));
//                dump($item->href);
                try
                {
                    $content = file_get_html($this->getFullPath($item->href, $baseUrl));
                }catch(\Exception $e)
                {
                    dump("Failed");
                }


                $data['link'] = $this->getFullPath($item->href, $baseUrl);
                $img = $content->find('.l_item .t_item img',0)->attr['data-original'];
                $data['image'] = time();



                $data['image'] .= '.jpg';

                $matches = [];
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
                $data['name'] = explode(' - ', trim($content->find('.r_item h1',0)->plaintext))[1];
                $data['category'] = explode(' - ', trim($content->find('.r_item h1',0)->plaintext))[0];
                $data['message'] = trim($content->find('.r_item .desc',0)->plaintext);
                $data['slug'] = str_slug($data['name']);
                $data['saleoff'] = 0;
                $data['quantity'] = 0;
                $data['admin_id'] = 1;
                $data['show'] = 1;


                $flower = '';
                if(!$flower = Flower::query()->where('slug', str_slug($data['name']))->first())
                {
                    try{
                        file_put_contents('images/'.$data['image'], file_get_contents($img));
                        $flower = Flower::query()->create($data);

                        $cate = '';
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
                    {dump("Crawl failed");}
                }



                dump('Done: '. $data['name']);

            }
        }
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

    public function downloadImage($url)
    {
        $this->request($url);
    }

}
