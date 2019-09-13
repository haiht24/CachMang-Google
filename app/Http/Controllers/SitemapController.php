<?php

namespace App\Http\Controllers;

use App\CachMangKeyword;
use DB;

class SitemapController extends Controller
{
    private $sitemapConfig;
    private $config;
	private $domainConfig;

    public function __construct() {
        $arrConfigs = config('home.domains_config');
        $domain = str_replace('www.', '', $_SERVER['HTTP_HOST']);
        $this->config = !empty($arrConfigs[$domain]) ? $arrConfigs[$domain] : [];
        $this->sitemapConfig = !empty($this->config['sitemap_keyword']) ? $this->config['sitemap_keyword'] : [];
        $dmConfig = config('theme.domains_config');
        $this->domainConfig = !empty($dmConfig[$domain]) ? $dmConfig[$domain] : [];
    }

    public function index()
    {
        $keywordsLength = 0;
        if(!empty($this->config)){
            $keywordsLength = count($this->sitemapConfig);
        }
		$count = (Int)($keywordsLength);
		
		if(!empty($this->domainConfig['sitemap_have_db'])) {
			$count += DB::table("cachmang_keyword")->count();
		}
        $data['page'] = $count / 1000;
        return view('sitemap-index')->with($data);
    }

    public function keywords($page) {
        $keywords = $this->sitemapConfig;
		$offset = $page*1000;
		$keywords = array_slice($keywords, $offset, 1000);
		if(!empty($this->domainConfig['sitemap_have_db'])) {
			$dbKeyword = DB::select( DB::raw("select keyword_text from cachmang_keyword OFFSET $offset limit 1000"));
			foreach($dbKeyword as $item) {
				if(!in_array($item->keyword_text, $keywords)) $keywords[] = $item->keyword_text;
			}
		}
        return response()->view('sitemap', [
            'keywords' => $keywords
        ])->header('Content-Type', 'text/xml');
    }
}
