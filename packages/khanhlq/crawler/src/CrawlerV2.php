<?php
/**
 * Created by PhpStorm.
 * User: kpmquockhanh
 * Date: 2019-03-14
 * Time: 19:15
 */

namespace Khanhlq\Crawler;

use Openbuildings\Spiderling\Node;
use Openbuildings\Spiderling\Page;

class CrawlerV2
{

    /**
     * @var string $path
     */
    private $path;

    private $crawler;


    public function __construct($path, Page $page)
    {
        $this->path = $path;
        $this->crawler = $page;
    }


    public function crawl()
    {
        //
        $this->path = [
            'root' => 'https://hoayeuthuong.com/',
            'list_link' => [1 => 'div.r_nav ul li a'],
            'fields' => [
                'title'
            ],
        ];

        $rootPage = $this->getPage($this->path['root']);
    }

    /**
     * Get all of list item to get detail page
     * @param Page $page
     * @param $selector
     * @return array
     */
    public function getListLinkSimple(Page $page, $selector)
    {
        $arrLinks = [];
        foreach ($page->all($selector) as $item) {
            $arrLinks[] = $this->getAttribute($item, 'href');
        }
        return $arrLinks;
    }

    /**
     * @param Page $page
     * @param string $selector
     * @param string $nextBtnSelector
     * @param string $attrNextButton
     * @return array
     */
    public function getListLinkPaginate(
        Page $page,
        string $selector,
        string $nextBtnSelector,
        string $attrNextButton = 'href'
    ) {
        $arrLinks = $this->getListLinkSimple($page, $selector);

        while ($nextLinkNode = $page->find($nextBtnSelector)) {
            $nextLink = $this->getAttribute($nextLinkNode, $attrNextButton);
            array_merge($arrLinks, $this->getListLinkSimple($page->visit($nextLink), $selector));
        }
        return $arrLinks;
    }

    /**
     * @param Node $node
     * @return string
     */
    public function getText(Node $node)
    {
        return $node->text();
    }

    /**
     * @param Node $node
     * @param string $attr
     * @return string
     */
    public function getAttribute(Node $node, string $attr)
    {
        return $node->attribute($attr);
    }

    /**
     * @param Node $node
     * @return string
     */
    public function getHtml(Node $node)
    {
        return $node->html();
    }

    /**
     * @param $url
     * @return Page
     */
    public function getPage($url)
    {
        $page = new Page();
        $page->visit($url);
        return $page;
    }

    /**
     * @param Page $page
     * @param string $name
     * @param string $selector
     * @param int $type
     * @param string $attr
     * @param bool $isMultiple
     * @param string $glue
     */
    public function getValue(
        Page $page,
        string $name,
        string $selector,
        int $type, // 1: text, 2: attribute, 3:html
        string $attr,
        bool $isMultiple = false,
        string $glue = " "
    ) {
        $data = [];

        if ($isMultiple) {
            $elements = $page->all($selector);
            $result = '';
            foreach ($elements as $index => $item) {
                $endGlue = ($index < count($elements) -1)?$glue:'';
                switch ($type) {
                    case 1:
                        $result .= $this->getText($item).$endGlue;
                        break;
                    case 2:
                        $result .= $this->getAttribute($item, $attr).$endGlue;
                        break;
                    case 3:
                        $result = $this->getHtml($item);
                        break;
                }
            }
        } else {
            $result = '';
            $element = $page->find($selector);
            switch ($type) {
                case 1:
                    $result = $this->getText($element);
                    break;
                case 2:
                    $result = $this->getAttribute($element, $attr);
                    break;
                case 3:
                    $result = $this->getHtml($element);
                    break;
            }
        }

        $data[$name] = $result;
    }


}
