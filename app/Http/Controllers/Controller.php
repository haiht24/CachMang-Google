<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct() {
        /* Get folder name contain config for each domain. Eg: /public/images/beginfinder */
        $host_explode = explode('.', strpos($_SERVER['HTTP_HOST'], '.') === false ? env('SITE_NAME') : $_SERVER['HTTP_HOST']);
        $c_host = count($host_explode);
        $GLOBALS['asset_domain'] = strtolower($host_explode[$c_host - 2]);
    }
}
