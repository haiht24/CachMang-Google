<?php

namespace App\Http\Controllers;

use App\CachMangKeyword;

class SitemapController extends Controller
{
    public function index()
    {
        $data = [];
        $keywordsLength = CachMangKeyword::count();
        $page = $keywordsLength / 1000;
        $data['page'] = (Int)$page;
        return view('sitemap-index')->with($data);
    }

    public function keywords($page) {
        $keywords = CachMangKeyword::offset($page * 1000)->limit(1000)->get();
        return response()->view('sitemap', [
            'keywords' => $keywords
        ])->header('Content-Type', 'text/xml');
    }
}
