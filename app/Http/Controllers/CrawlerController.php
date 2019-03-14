<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryFlower;
use App\Flower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Khanhlq\Crawler\Crawler;

class CrawlerController extends Controller
{
    public $crawler;
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->crawler = new Crawler();
    }

    public function index()
    {

//        dd(123123);
        $viewData = [
            'links' => $this->crawler->getListCate($this->crawler->baseUrls),
        ];

        return view('backend.flowers.crawler.list')->with($viewData);
    }

    public function crawl(Request $request)
    {
        $data = $this->crawler->crawl($request->index);

        if ($data['status'])
        {
            $data['data'] = view('backend.flowers.crawler.tr')->with(['link' => $data['data']])->render();
        }

        return response()->json($data);
    }

}
