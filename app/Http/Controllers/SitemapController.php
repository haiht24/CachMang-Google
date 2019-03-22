<?php

namespace App\Http\Controllers;

use App\CachMangKeyword;

class SitemapController extends Controller
{
    private $sitemapConfig;
    private $config;

    public function __construct() {
        $arrConfigs = config('theme.domains_config');
        $domain = $_SERVER['HTTP_HOST'];
        $this->config = !empty($arrConfigs[$domain]) ? $arrConfigs[$domain] : [];
        $this->sitemapConfig = !empty($this->config['sitemap_keyword']) ? $this->config['sitemap_keyword'] : [];
    }

    public function index()
    {
        $keywordsLength = 0;
        if(!empty($this->config)){
            $keywordsLength = count($this->sitemapConfig);
        }

        $data['page'] = (Int)($keywordsLength / 1000);
        return view('sitemap-index')->with($data);
    }

    public function keywords($page) {
        $keywords = $this->sitemapConfig;
        return response()->view('sitemap', [
            'keywords' => $keywords
        ])->header('Content-Type', 'text/xml');
    }
}
