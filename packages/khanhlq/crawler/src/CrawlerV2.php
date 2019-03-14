<?php
/**
 * Created by PhpStorm.
 * User: kpmquockhanh
 * Date: 2019-03-14
 * Time: 19:15
 */

namespace Khanhlq\Crawler;

use Khanhlq\Crawler\Step;
use Openbuildings\Spiderling\Page;


class CrawlerV2
{
    private $crawler;

    private $path;// Array of steps



    public function __construct($path)
    {
        $this->crawler = new Page();
        $this->path = $path;
    }


    public function crawl($rootUrl)
    {

    }

}
