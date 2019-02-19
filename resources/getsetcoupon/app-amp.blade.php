<!doctype html>
<html ⚡>
<head>
    <meta charset="utf-8">
    <title>Jumbotron Template for Bootstrap</title>
    <link rel="canonical" href="https://uncompiled.github.io/amp-bootstrap/" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="description" content="Sample Bootstrap Site">
    <meta name="author" content="Web Developer">

    <!-- fav icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/images/favicon/') }}/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/images/favicon/') }}/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/images/favicon/') }}/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/images/favicon/') }}/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/images/favicon/') }}/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/images/favicon/') }}/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/images/favicon/') }}/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/images/favicon/') }}/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/favicon/') }}/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('/images/favicon/') }}/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicon/') }}/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/images/favicon/') }}/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicon/') }}/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('/images/favicon/') }}/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('/images/favicon/') }}/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!-- AMP boilerplate -->
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <!-- Bootstrap core CSS is replaced with amp-custom style tag -->
<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
<amp-analytics type="gtag" data-credentials="include">
        <script type="application/json">
        {
            "vars" : {
                "gtag_id": "UA-133319068-1",
                "config" : {
                    "UA-133319068-1": { "groups": "default" }
                }
            }
        }
		</script>
</amp-analytics>
<style amp-custom>/*!
* Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 *//*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}details,footer,header,main,nav{display:block}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}h1{margin:.67em 0;font-size:2em}hr{height:0;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}button{margin:0;font:inherit;color:inherit}button{overflow:visible}button{text-transform:none}button{-webkit-appearance:button;cursor:pointer}button[disabled]{cursor:default}button::-moz-focus-inner{padding:0;border:0}/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */@media print{*,:after,:before{color:#000;text-shadow:none;background:0 0;-webkit-box-shadow:none;box-shadow:none}a,a:visited{text-decoration:underline}a[href]:after{content:" (" attr(href) ")"}a[href^="#"]:after,a[href^="javascript:"]:after{content:""}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}.navbar{display:none}}@font-face{font-family:'Glyphicons Halflings';src:url(../fonts/glyphicons-halflings-regular.eot);src:url(../fonts/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'),url(../fonts/glyphicons-halflings-regular.woff2) format('woff2'),url(../fonts/glyphicons-halflings-regular.woff) format('woff'),url(../fonts/glyphicons-halflings-regular.ttf) format('truetype'),url(../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:transparent}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}button{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}a:focus,a:hover{color:#23527c;text-decoration:underline}a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}[role=button]{cursor:pointer}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}.h1,.h2,.h3,h1,h2,h3{margin-top:20px;margin-bottom:10px}.h4,.h5,.h6,h4,h5,h6{margin-top:10px;margin-bottom:10px}.h1,h1{font-size:36px}.h2,h2{font-size:30px}.h3,h3{font-size:24px}.h4,h4{font-size:18px}.h5,h5{font-size:14px}.h6,h6{font-size:12px}p{margin:0 0 10px}.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-right:-15px;margin-left:-15px}.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{position:relative;min-height:1px;padding-right:15px;padding-left:15px}.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0}@media (min-width:768px){.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}}@media (min-width:1200px){.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px}.btn:active:focus,.btn:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}.btn:focus,.btn:hover{color:#333;text-decoration:none}.btn:active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn[disabled]{cursor:not-allowed;-webkit-box-shadow:none;box-shadow:none;opacity:.65}.btn-default{color:#333;background-color:#fff;border-color:#ccc}.btn-default:focus{color:#333;background-color:#e6e6e6;border-color:#8c8c8c}.btn-default:hover{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default:active{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default:active:focus,.btn-default:active:hover{color:#333;background-color:#d4d4d4;border-color:#8c8c8c}.btn-default:active{background-image:none}.btn-default[disabled]:focus,.btn-default[disabled]:hover{background-color:#fff;border-color:#ccc}.btn-primary{color:#fff;background-color:#337ab7;border-color:#2e6da4}.btn-primary:focus{color:#fff;background-color:#286090;border-color:#122b40}.btn-primary:hover{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary:active{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary:active:focus,.btn-primary:active:hover{color:#fff;background-color:#204d74;border-color:#122b40}.btn-primary:active{background-image:none}.btn-primary[disabled]:focus,.btn-primary[disabled]:hover{background-color:#337ab7;border-color:#2e6da4}.btn-link{font-weight:400;color:#337ab7;border-radius:0}.btn-link,.btn-link:active,.btn-link[disabled]{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.btn-link,.btn-link:active,.btn-link:focus,.btn-link:hover{border-color:transparent}.btn-link:focus,.btn-link:hover{color:#23527c;text-decoration:underline;background-color:transparent}.btn-link[disabled]:focus,.btn-link[disabled]:hover{color:#777;text-decoration:none}.btn-lg{padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.collapse{display:none}.nav{padding-left:0;margin-bottom:0;list-style:none}.navbar{position:relative;min-height:50px;margin-bottom:20px;border:1px solid transparent}@media (min-width:768px){.navbar{border-radius:4px}}@media (min-width:768px){.navbar-header{float:left}}.navbar-collapse{padding-right:15px;padding-left:15px;overflow-x:visible;-webkit-overflow-scrolling:touch;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1)}@media (min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block;height:auto;padding-bottom:0;overflow:visible}.navbar-fixed-top .navbar-collapse{padding-right:0;padding-left:0}}.navbar-fixed-top .navbar-collapse{max-height:340px}@media (max-device-width:480px) and (orientation:landscape){.navbar-fixed-top .navbar-collapse{max-height:200px}}.container>.navbar-collapse,.container>.navbar-header{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.container>.navbar-collapse,.container>.navbar-header{margin-right:0;margin-left:0}}.navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030}@media (min-width:768px){.navbar-fixed-top{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-brand{float:left;height:50px;padding:15px 15px;font-size:18px;line-height:20px}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}@media (min-width:768px){.navbar>.container .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;padding:9px 10px;margin-top:8px;margin-right:15px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle:focus{outline:0}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7.5px -15px}@media (min-width:768px){.navbar-nav{float:left;margin:0}}.navbar-btn{margin-top:8px;margin-bottom:8px}.navbar-default{background-color:#f8f8f8;border-color:#e7e7e7}.navbar-default .navbar-brand{color:#777}.navbar-default .navbar-brand:focus,.navbar-default .navbar-brand:hover{color:#5e5e5e;background-color:transparent}.navbar-default .navbar-toggle{border-color:#ddd}.navbar-default .navbar-toggle:focus,.navbar-default .navbar-toggle:hover{background-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-default .navbar-collapse{border-color:#e7e7e7}.navbar-default .navbar-link{color:#777}.navbar-default .navbar-link:hover{color:#333}.navbar-default .btn-link{color:#777}.navbar-default .btn-link:focus,.navbar-default .btn-link:hover{color:#333}.navbar-default .btn-link[disabled]:focus,.navbar-default .btn-link[disabled]:hover{color:#ccc}.navbar-inverse{background-color:#222;border-color:#080808}.navbar-inverse .navbar-brand{color:#9d9d9d}.navbar-inverse .navbar-brand:focus,.navbar-inverse .navbar-brand:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-toggle{border-color:#333}.navbar-inverse .navbar-toggle:focus,.navbar-inverse .navbar-toggle:hover{background-color:#333}.navbar-inverse .navbar-toggle .icon-bar{background-color:#fff}.navbar-inverse .navbar-collapse{border-color:#101010}.navbar-inverse .navbar-link{color:#9d9d9d}.navbar-inverse .navbar-link:hover{color:#fff}.navbar-inverse .btn-link{color:#9d9d9d}.navbar-inverse .btn-link:focus,.navbar-inverse .btn-link:hover{color:#fff}.navbar-inverse .btn-link[disabled]:focus,.navbar-inverse .btn-link[disabled]:hover{color:#444}.jumbotron{padding-top:30px;padding-bottom:30px;margin-bottom:30px;color:inherit;background-color:#eee}.jumbotron .h1,.jumbotron h1{color:inherit}.jumbotron p{margin-bottom:15px;font-size:21px;font-weight:200}.jumbotron>hr{border-top-color:#d5d5d5}.container .jumbotron{padding-right:15px;padding-left:15px;border-radius:6px}.jumbotron .container{max-width:100%}@media screen and (min-width:768px){.jumbotron{padding-top:48px;padding-bottom:48px}.container .jumbotron{padding-right:60px;padding-left:60px}.jumbotron .h1,.jumbotron h1{font-size:63px}}@-webkit-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@-o-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}.container:after,.container:before,.nav:after,.nav:before,.navbar-collapse:after,.navbar-collapse:before,.navbar-header:after,.navbar-header:before,.navbar:after,.navbar:before,.row:after,.row:before{display:table;content:" "}.container:after,.nav:after,.navbar-collapse:after,.navbar-header:after,.navbar:after,.row:after{clear:both}.hidden{display:none}.visible-lg,.visible-md{display:none}@media (min-width:992px) and (max-width:1199px){.visible-md{display:block}}@media (min-width:1200px){.visible-lg{display:block}}@media (min-width:992px) and (max-width:1199px){.hidden-md{display:none}}@media (min-width:1200px){.hidden-lg{display:none}}
 body{font-family:"Helvetica Neue"}body *{box-sizing:border-box}body body{font:16px Arial}body .autocomplete{position:relative;display:inline-block}body input{border:1px solid transparent;background-color:#f1f1f1;padding:10px;font-size:16px}body input[type=text]{background-color:#f1f1f1;width:100%}body input[type=submit]{background-color:DodgerBlue;color:#fff}body .autocomplete-items{position:absolute;border:1px solid #d4d4d4;border-bottom:0;border-top:0;z-index:99;left:0;right:0;top:35px;width:266px}body .autocomplete-items div{padding:10px;cursor:pointer;background-color:#fff;border-bottom:1px solid #d4d4d4}body .autocomplete-items div:hover{background-color:#e9e9e9}body .autocomplete-active{background-color:DodgerBlue!important;color:#fff}body .footer{background-color:#44a5c2;margin-bottom:0}body .footer .con-footer{padding-left:30px;padding-right:30px;color:#fff}body .footer .con-footer .alert-link{color:#fff!important}body .footer .con-footer .alert-link a{color:#fff}body .page-nav{text-align:center}body .page-nav span{padding:10px}body .split{column-count:4}body .home-h1{color:#7e7e7e;font-size:28px;font-weight:normal;margin-top:0;padding-top:15px;padding-bottom:15px}body .home-h1-blue{color:#648ab9;font-size:28px;font-weight:normal;margin-top:0;padding-top:15px;padding-bottom:15px}body .top-trending-search{padding-left:0;padding-right:0}body .top-trending-search p{padding-bottom:10px}body .top-trending-search p span{font-size:9px;color:#648ab9}body .popular-kws .list-group a{color:#7e7e7e}body .text-gray-0{color:#7e7e7e!important}body .navbar-inverse{background-color:#27456d;border-color:#27456d}body .logo{max-width:100%;height:50px}body .navbar-inverse .navbar-nav>li>a{color:#83a3ca}body .search-input{width:100%}body .search-input .parent-header-search{list-style:none;width:70%;margin:0;padding:0;white-space:nowrap}body .search-input .parent-header-search input{margin-right:5px;border-radius:4px!important}body .search-input .parent-header-search button{background-color:#5bc0de}.parent{margin-top:0!important}.search-input{margin-top:7px}.search-input button{background-color:#f77779;color:#fff}.search-input .btn-select-default-keyword{height:34px}.search-input .sub-menu{background-color:#f77779}.search-input .sub-menu a{color:#fff!important}.search-input .sub-menu a:hover{cursor:pointer;background-color:red}.alert-info{background-color:#fff}.navbar{margin-top:0!important}.body-content{margin-top:60px}.npd-lr{padding-left:0;padding-right:0}.search-result h3{margin-top:0}.breadcrumb{background-color:#ececec!important}.last-search-24h{min-height:57px}.banner{margin-top:-5px;padding-bottom:20px}.banner img{width:100%}.footer{padding:20px;margin-bottom:20px}.static-page{padding:20px}textarea,input{padding:10px;font-family:FontAwesome,"Open Sans",Verdana,sans-serif;font-style:normal;font-weight:normal;text-decoration:inherit}.home-search{background-color:#58bc84;height:157px;border-radius:4px}.home-search .input-search{height:47px;font-size:24px}.home-search h1{color:#fff}.home-search .search-container{margin:0 auto;width:70%}.home-search .search-container .fa-search{font-size:24px}.home-search .search-container .input-group-addon{background-color:#fff}.home-search.below{margin-bottom:40px;height:auto!important}.home-search.below h1{margin-top:50px;margin-bottom:50px}.text-home{margin-top:30px;margin-bottom:35px;color:#404040}.box-site-description .box-site-description-content{width:90%;margin:0 auto}.result-url{color:#999;padding-top:10px}.result-url .fa-external-link{font-weight:bold}.rs-description{color:#333}.btn-select-default-keyword{width:160px;height:47px}.sub-menu{margin-top:0;background-color:#58bc84}.sub-menu a{color:#fff!important}.sub-menu a:hover{cursor:pointer;background-color:blue}.container-header{padding-top:5px;padding-bottom:5px}.box-breadcrumb{padding-right:30px}@media(max-width:1199px){body .btn-select-default-keyword{width:88px}body .navbar-nav li a{padding-left:10px;padding-right:10px}body .home-h1{font-size:24px}body .home-h1-blue{font-size:24px}}@media(max-width:991px){body .home-h1{font-size:20px}body .home-h1-blue{font-size:20px}}@media(max-width:467px){.parent{padding-left:0!important;padding-right:0!important}.body-content{padding-left:0!important;padding-right:0!important;margin-top:100px}.navbar-header{text-align:center}.home-h1{font-size:18px}.home-h1-blue{font-size:18px}.footer{padding-left:0;padding-right:0}.footer .con-footer{padding-left:0!important;padding-right:0!important}}.panel{margin-bottom:@line-height-computed;background-color:@panel-bg;border:1px solid transparent;border-radius:@panel-border-radius;.box-shadow(0 1px 1px rgba(0,0,0,.05))}.panel-body{padding:@panel-body-padding;&:extend(.clearfix all)}.panel-heading{padding:@panel-heading-padding;border-bottom:1px solid transparent;.border-top-radius((@panel-border-radius - 1));>.dropdown .dropdown-toggle{color:inherit}}.panel-title{margin-top:0;margin-bottom:0;font-size:ceil((@font-size-base * 1.125));color:inherit;>a,>small,>.small,>small>a,>.small>a{color:inherit}}.panel-footer{padding:@panel-footer-padding;background-color:@panel-footer-bg;border-top:1px solid @panel-inner-border;.border-bottom-radius((@panel-border-radius - 1))}.panel{>.list-group,>.panel-collapse>.list-group{margin-bottom:0;.list-group-item{border-width:1px 0;border-radius:0}&:first-child{.list-group-item:first-child{border-top:0;.border-top-radius((@panel-border-radius - 1))}}&:last-child{.list-group-item:last-child{border-bottom:0;.border-bottom-radius((@panel-border-radius - 1))}}}>.panel-heading+.panel-collapse>.list-group{.list-group-item:first-child{.border-top-radius(0)}}}.panel-heading+.list-group{.list-group-item:first-child{border-top-width:0}}.list-group+.panel-footer{border-top-width:0}.panel{>.table,>.table-responsive>.table,>.panel-collapse>.table{margin-bottom:0;caption{padding-left:@panel-body-padding;padding-right:@panel-body-padding}}>.table:first-child,>.table-responsive:first-child>.table:first-child{.border-top-radius((@panel-border-radius - 1));>thead:first-child,>tbody:first-child{>tr:first-child{border-top-left-radius:(@panel-border-radius - 1);border-top-right-radius:(@panel-border-radius - 1);td:first-child,th:first-child{border-top-left-radius:(@panel-border-radius - 1)}td:last-child,th:last-child{border-top-right-radius:(@panel-border-radius - 1)}}}}>.table:last-child,>.table-responsive:last-child>.table:last-child{.border-bottom-radius((@panel-border-radius - 1));>tbody:last-child,>tfoot:last-child{>tr:last-child{border-bottom-left-radius:(@panel-border-radius - 1);border-bottom-right-radius:(@panel-border-radius - 1);td:first-child,th:first-child{border-bottom-left-radius:(@panel-border-radius - 1)}td:last-child,th:last-child{border-bottom-right-radius:(@panel-border-radius - 1)}}}}>.panel-body+.table,>.panel-body+.table-responsive,>.table+.panel-body,>.table-responsive+.panel-body{border-top:1px solid @table-border-color}>.table>tbody:first-child>tr:first-child th,>.table>tbody:first-child>tr:first-child td{border-top:0}>.table-bordered,>.table-responsive>.table-bordered{border:0;>thead,>tbody,>tfoot{>tr{>th:first-child,>td:first-child{border-left:0}>th:last-child,>td:last-child{border-right:0}}}>thead,>tbody{>tr:first-child{>td,>th{border-bottom:0}}}>tbody,>tfoot{>tr:last-child{>td,>th{border-bottom:0}}}}>.table-responsive{border:0;margin-bottom:0}}.panel-group{margin-bottom:@line-height-computed;.panel{margin-bottom:0;border-radius:@panel-border-radius;+.panel{margin-top:5px}}.panel-heading{border-bottom:0;+.panel-collapse>.panel-body,+.panel-collapse>.list-group{border-top:1px solid @panel-inner-border}}.panel-footer{border-top:0;+.panel-collapse .panel-body{border-bottom:1px solid @panel-inner-border}}}.panel-default{border:1px solid #ddd}.panel-default{.panel-variant(@panel-default-border;@panel-default-text;@panel-default-heading-bg;@panel-default-border)}.panel-primary{.panel-variant(@panel-primary-border;@panel-primary-text;@panel-primary-heading-bg;@panel-primary-border)}.panel-success{.panel-variant(@panel-success-border;@panel-success-text;@panel-success-heading-bg;@panel-success-border)}.panel-info{.panel-variant(@panel-info-border;@panel-info-text;@panel-info-heading-bg;@panel-info-border)}.panel-warning{.panel-variant(@panel-warning-border;@panel-warning-text;@panel-warning-heading-bg;@panel-warning-border)}.panel-danger{.panel-variant(@panel-danger-border;@panel-danger-text;@panel-danger-heading-bg;@panel-danger-border)}.navbar{position:relative;min-height:@navbar-height;margin-bottom:@navbar-margin-bottom;border:1px solid transparent;&:extend(.clearfix all);@media(min-width:@grid-float-breakpoint){border-radius:@navbar-border-radius}}.navbar-header{&:extend(.clearfix all);@media(min-width:@grid-float-breakpoint){float:left}}.navbar-collapse{overflow-x:visible;padding-right:@navbar-padding-horizontal;padding-left:@navbar-padding-horizontal;border-top:1px solid transparent;box-shadow:inset 0 1px 0 rgba(255,255,255,.1);&:extend(.clearfix all);-webkit-overflow-scrolling:touch;&.in{overflow-y:auto}@media(min-width:@grid-float-breakpoint){width:auto;border-top:0;box-shadow:none;&.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important}&.in{overflow-y:visible}.navbar-fixed-top &,.navbar-static-top &,.navbar-fixed-bottom &{padding-left:0;padding-right:0}}}.navbar-fixed-top,.navbar-fixed-bottom{.navbar-collapse{max-height:@navbar-collapse-max-height;@media(max-device-width:@screen-xs-min) and (orientation:landscape){max-height:200px}}}.container,.container-fluid{>.navbar-header,>.navbar-collapse{margin-right:-@navbar-padding-horizontal;margin-left:-@navbar-padding-horizontal;@media(min-width:@grid-float-breakpoint){margin-right:0;margin-left:0}}}.navbar-static-top{z-index:@zindex-navbar;border-width:0 0 1px;@media(min-width:@grid-float-breakpoint){border-radius:0}}.navbar-fixed-top,.navbar-fixed-bottom{position:fixed;right:0;left:0;z-index:@zindex-navbar-fixed;@media(min-width:@grid-float-breakpoint){border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-fixed-bottom{bottom:0;margin-bottom:0;border-width:1px 0 0}.navbar-brand{float:left;padding:@navbar-padding-vertical @navbar-padding-horizontal;font-size:@font-size-large;line-height:@line-height-computed;height:@navbar-height;&:hover,&:focus{text-decoration:none}>img{display:block}@media(min-width:@grid-float-breakpoint){.navbar>.container &,.navbar>.container-fluid &{margin-left:-@navbar-padding-horizontal}}}.navbar-toggle{position:relative;float:right;margin-right:@navbar-padding-horizontal;padding:9px 10px;.navbar-vertical-align(34px);background-color:transparent;background-image:none;border:1px solid transparent;border-radius:@border-radius-base;&:focus{outline:0}.icon-bar{display:block;width:22px;height:2px;border-radius:1px}.icon-bar+.icon-bar{margin-top:4px}@media(min-width:@grid-float-breakpoint){display:none}}.navbar-nav{margin:(@navbar-padding-vertical / 2) -@navbar-padding-horizontal;>li>a{padding-top:10px;padding-bottom:10px;line-height:@line-height-computed}@media(max-width:@grid-float-breakpoint-max){.open .dropdown-menu{position:static;float:none;width:auto;margin-top:0;background-color:transparent;border:0;box-shadow:none;>li>a,.dropdown-header{padding:5px 15px 5px 25px}>li>a{line-height:@line-height-computed;&:hover,&:focus{background-image:none}}}}@media(min-width:@grid-float-breakpoint){float:left;margin:0;>li{float:left;>a{padding-top:@navbar-padding-vertical;padding-bottom:@navbar-padding-vertical}}}}.navbar-form{margin-left:-@navbar-padding-horizontal;margin-right:-@navbar-padding-horizontal;padding:10px @navbar-padding-horizontal;border-top:1px solid transparent;border-bottom:1px solid transparent;@shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1);.box-shadow(@shadow);.form-inline();.form-group{@media(max-width:@grid-float-breakpoint-max){margin-bottom:5px;&:last-child{margin-bottom:0}}}.navbar-vertical-align(@input-height-base);@media(min-width:@grid-float-breakpoint){width:auto;border:0;margin-left:0;margin-right:0;padding-top:0;padding-bottom:0;.box-shadow(none)}}.navbar-nav>li>.dropdown-menu{margin-top:0;.border-top-radius(0)}.navbar-fixed-bottom .navbar-nav>li>.dropdown-menu{margin-bottom:0;.border-top-radius(@navbar-border-radius);.border-bottom-radius(0)}.navbar-btn{.navbar-vertical-align(@input-height-base);&.btn-sm{.navbar-vertical-align(@input-height-small)}&.btn-xs{.navbar-vertical-align(22)}}.navbar-text{.navbar-vertical-align(@line-height-computed);@media(min-width:@grid-float-breakpoint){float:left;margin-left:@navbar-padding-horizontal;margin-right:@navbar-padding-horizontal}}@media(min-width:@grid-float-breakpoint){.navbar-left{.pull-left()}.navbar-right{.pull-right();margin-right:-@navbar-padding-horizontal;~ .navbar-right{margin-right:0}}}.navbar-default{background-color:@navbar-default-bg;border-color:@navbar-default-border;.navbar-brand{color:@navbar-default-brand-color;&:hover,&:focus{color:@navbar-default-brand-hover-color;background-color:@navbar-default-brand-hover-bg}}.navbar-text{color:@navbar-default-color}.navbar-nav{>li>a{color:@navbar-default-link-color;&:hover,&:focus{color:@navbar-default-link-hover-color;background-color:@navbar-default-link-hover-bg}}>.active>a{&,&:hover,&:focus{color:@navbar-default-link-active-color;background-color:@navbar-default-link-active-bg}}>.disabled>a{&,&:hover,&:focus{color:@navbar-default-link-disabled-color;background-color:@navbar-default-link-disabled-bg}}}.navbar-toggle{border-color:@navbar-default-toggle-border-color;&:hover,&:focus{background-color:@navbar-default-toggle-hover-bg}.icon-bar{background-color:@navbar-default-toggle-icon-bar-bg}}.navbar-collapse,.navbar-form{border-color:@navbar-default-border}.navbar-nav{>.open>a{&,&:hover,&:focus{background-color:@navbar-default-link-active-bg;color:@navbar-default-link-active-color}}@media(max-width:@grid-float-breakpoint-max){.open .dropdown-menu{>li>a{color:@navbar-default-link-color;&:hover,&:focus{color:@navbar-default-link-hover-color;background-color:@navbar-default-link-hover-bg}}>.active>a{&,&:hover,&:focus{color:@navbar-default-link-active-color;background-color:@navbar-default-link-active-bg}}>.disabled>a{&,&:hover,&:focus{color:@navbar-default-link-disabled-color;background-color:@navbar-default-link-disabled-bg}}}}}.navbar-link{color:@navbar-default-link-color;&:hover{color:@navbar-default-link-hover-color}}.btn-link{color:@navbar-default-link-color;&:hover,&:focus{color:@navbar-default-link-hover-color}&[disabled],fieldset[disabled] &{&:hover,&:focus{color:@navbar-default-link-disabled-color}}}}.navbar-inverse{background-color:@navbar-inverse-bg;border-color:@navbar-inverse-border;.navbar-brand{color:@navbar-inverse-brand-color;&:hover,&:focus{color:@navbar-inverse-brand-hover-color;background-color:@navbar-inverse-brand-hover-bg}}.navbar-text{color:@navbar-inverse-color}.navbar-nav{>li>a{color:@navbar-inverse-link-color;&:hover,&:focus{color:@navbar-inverse-link-hover-color;background-color:@navbar-inverse-link-hover-bg}}>.active>a{&,&:hover,&:focus{color:@navbar-inverse-link-active-color;background-color:@navbar-inverse-link-active-bg}}>.disabled>a{&,&:hover,&:focus{color:@navbar-inverse-link-disabled-color;background-color:@navbar-inverse-link-disabled-bg}}}.navbar-toggle{border-color:@navbar-inverse-toggle-border-color;&:hover,&:focus{background-color:@navbar-inverse-toggle-hover-bg}.icon-bar{background-color:@navbar-inverse-toggle-icon-bar-bg}}.navbar-collapse,.navbar-form{border-color:darken(@navbar-inverse-bg,7%)}.navbar-nav{>.open>a{&,&:hover,&:focus{background-color:@navbar-inverse-link-active-bg;color:@navbar-inverse-link-active-color}}@media(max-width:@grid-float-breakpoint-max){.open .dropdown-menu{>.dropdown-header{border-color:@navbar-inverse-border}.divider{background-color:@navbar-inverse-border}>li>a{color:@navbar-inverse-link-color;&:hover,&:focus{color:@navbar-inverse-link-hover-color;background-color:@navbar-inverse-link-hover-bg}}>.active>a{&,&:hover,&:focus{color:@navbar-inverse-link-active-color;background-color:@navbar-inverse-link-active-bg}}>.disabled>a{&,&:hover,&:focus{color:@navbar-inverse-link-disabled-color;background-color:@navbar-inverse-link-disabled-bg}}}}}.navbar-link{color:@navbar-inverse-link-color;&:hover{color:@navbar-inverse-link-hover-color}}.btn-link{color:@navbar-inverse-link-color;&:hover,&:focus{color:@navbar-inverse-link-hover-color}&[disabled],fieldset[disabled] &{&:hover,&:focus{color:@navbar-inverse-link-disabled-color}}}}
		@yield('css')
</style>
</head>
<body>
@include('elements.header-amp')
<div class="col-xs-12 body-content">
@yield('content')
</div>
@include('elements.footer')
</body>
</html>