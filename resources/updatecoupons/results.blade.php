@extends('app')
@section('content')
    <div class="main">
        <div class="col-xs-12"><h1 class="text-primary keyword"
                                   data-value="{{ $q }}">{{ !empty($q) ? ucwords($q):'Result page' }}</h1></div>
        <div class="col-xs-12 box-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ !empty($q) ? str_ireplace(' ', '-', $q):'#' }}">{{ !empty($q) ? ucwords($q):'' }}</a>
                </li>
            </ol>
        </div>
        <hr>
        <div class="col-xs-12">
            {{--Related keywords--}}
            @if(!empty($related))
                <div class="col-xs-12 npd-lr">
                    @foreach($related as $r)
                        @if(!empty($r))
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <p>
                                    {{-- Neu co keyword mac dinh --}}
                                    @if(!empty($r->title))
                                        @if(env('KEYWORD'))
                                            @if(strpos(strtolower($r->title),env('KEYWORD')) === false)
                                                › <a class="related_keywords"
                                                     href="{{ url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%','',$r->title . ' ' . env('KEYWORD'))) }}">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r->title . ' ' . env('KEYWORD'))) !!}</a>
                                            @else
                                                › <a class="related_keywords"
                                                     href="{{ url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%','',$r->title)) }}">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r->title)) !!}</a>
                                            @endif
                                        @else
                                            › <a class="related_keywords"
                                                 href="{{ url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%','',$r->title)) }}">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r->title)) !!}</a>
                                        @endif
                                    @else
                                        @if(env('KEYWORD'))
                                            @if(strpos(strtolower($r),env('KEYWORD')) === false)
                                                › <a class="related_keywords"
                                                     href="{{ url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%','',$r . ' ' . env('KEYWORD'))) }}">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r . ' ' . env('KEYWORD'))) !!}</a>
                                            @else
                                                › <a class="related_keywords"
                                                     href="{{ url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%','',$r)) }}">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r)) !!}</a>
                                            @endif
                                        @else
                                            › <a class="related_keywords"
                                                 href="{{ url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%','',$r)) }}">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r)) !!}</a>
                                        @endif
                                    @endif
                                </p>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
            <h3 class="text-primary npd-lr col-xs-12"> Listing Websites about {{ ucwords($q) }}</h3>
            <div class="row" style="margin-bottom:10px">
                <div class="col-xs-12">
                    <strong class="filter-type">Filter Type:</strong>
                    <button class="btn btn-default" name="filterValue" value="$">
                        <input type="radio" name="raCheck"> $ Off
                    </button>
                    <button class="btn btn-default" name="filterValue" value="%">
                        <input type="radio" name="raCheck"> % Off
                    </button>
                    <button class="btn btn-default" name="filterValue" value="all">
                        <input type="radio" name="raCheck" checked> All
                    </button>
                </div>
            </div>

            {{--Result search--}}
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    @include('custom-ads.ads-head')
                    @if(count($results) > 0)
                        @foreach($results as $k=>$result)
                            @if(0) if($k === 2 || $k === 6 || $k === 9)
                            <div class="search-result col-md-6 col-xs-12">
                                <div class="panel panel-default" style="overflow:hidden">
                                    <div class="panel-body">
                                        @include('Google.adsense')
                                    </div>
                                </div>
                            </div>
                            @endif
                            <?php
                            preg_match('/\$([0-9]+[\.]*[0-9]*) off|\$([0-9]+[\.]*[0-9]*) Off|\$([0-9]+[\.]*[0-9]*)/', $result['title'], $findDollar);
                            preg_match('/([0-9]+[\.]*[0-9]*)\% Off|([0-9]+[\.]*[0-9]*)\% off|([0-9]+[\.]*[0-9]*)\%/', $result['title'], $findPercent);
                            ?>
                            <div class="search-result col-md-12 col-xs-12">
                                <div class="panel panel-default" style="overflow:hidden">
                                    <div class="panel-body">
                                        @if(empty($result['type']) || $result['type'] !== 'fake')
                                            <a href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}"
                                               target="_blank" {!! $rel_ex !!}><h3
                                                        class="text-primary">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}</h3>
                                            </a>
                                        @else
                                            <h3 class="text-primary">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}</h3>
                                        @endif
                                        <span class="btn btn-warning  pull-left discount-value"
                                              style="margin-right:10px">
									<p>{{ !empty($findDollar) ? strtolower($findDollar[0]) : (!empty($findPercent) ? strtolower($findPercent[0]) : 'CODE') }}</p>
									</span>
                                        @if(!empty($result['description']))
                                            <span class="rs-description">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', isset($result['description']{160})?substr($result['description'],0,160).'<span onclick="showmore(this)" style="color:lightblue"><span class="hidden">'.substr($result['description'],160).'</span>...more</span>':$result['description'])) !!}</span>
                                        @endif
                                        @if(empty($result['type']) || $result['type'] !== 'fake')
                                            <p class="result-url">
                                                {{ str_limit(html_entity_decode($result['url']),80) }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <input type="hidden" id="isFromSERP" value="1">
                    {{--@include('custom-ads.ads-foot')--}}
                </div>

                {{--Right side bar--}}
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    {{--Top search--}}
                    @if(!empty($popularSearch))
                        <div class="list-group">
                            <h2 class="list-group-item active">Popular Searched</h3>
                                @foreach($popularSearch as $k)
                                    <?php $rs = detect_keywords($sitemap_keyword[$k]); ?>
                                    <a href="{{ url('/' . str_slug($rs)) }}" title="{{ ucwords($rs) }}"
                                       class="list-group-item">
                                        <span class="text-primary">{{ ucwords($rs) }}</span>
                                    </a>
                            @endforeach
                        </div>
                    @endif

                    {{--Recently search--}}
                    @if(!empty($recentlySearch))
                        <div class="list-group">
                            <h2 class="list-group-item active">Recently Searched</h3>
                                @foreach($recentlySearch as $k)
                                    <?php $rs = detect_keywords($sitemap_keyword[$k]); ?>
                                    <a href="{{ url('/' . str_slug($rs)) }}" title="{{ ucwords($rs) }}"
                                       class="list-group-item">
                                        <span class="text-primary">{{ ucwords($rs) }}</span>
                                    </a>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" class="keyword" data-value="{{ $q }}">
	
	    <div class="row">
        <h2>Trending searches</h2>
        @if(!empty($trendingSearch))
            @foreach($trendingSearch as $ki)
                <div class="col-lg-3 col-md-3 col-sm-6">
                    @foreach($ki as $k)<?php $v = $sitemap_keyword[$k]; ?>
                        <?php $item = detect_keywords($v, ' coupon'); ?>
                        <p>
                            <a href="{{ url('/' . str_slug($item)) }}">{{ str_limit(ucwords($item), 25) }} </a>
                        </p>
                    @endforeach
                </div>
            @endforeach
        @endif
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            console.log($('#isFromSERP').val() == 1 ? 'SERP' : 'DB');
            if ($('#isFromSERP').val() == 1) {
                var currentKeyword = $('.keyword').data('value').trim();
                var results = [], relatedKeywords = [];
                $('.search-result').each(function () {
                    var a = {
                        title: '',
                        desctiprion: '',
                        url: ''
                    };
                    var t = $(this);
                    a.title = t.find('h3.title').text().trim();
                    a.description = t.find('.rs-description').text().trim();
                    a.url = t.find('a').attr('href');
                    results.push(a);
                });

                $('.related_keywords').each(function () {
                    var t = $(this);
                    relatedKeywords.push(t.text());
                });
                $.post(url + '/save', {
                    results: JSON.stringify(results),
                    currentKeyword: currentKeyword,
                    relatedKeywords: relatedKeywords
                }, function (response) {
                    console.log(response);
                })
            }

            /* Filter discount value */
            $('button[name=filterValue]').click(function () {
                var t = $(this);
                var vl = t.text().trim();
//                console.log('click ',vl);
                t.find('input[name=raCheck]').prop("checked", true);
                if (vl.indexOf('All') > -1) {
                    $('.search-result').show();
                    return;
                }
                if (vl.indexOf('%') > -1) {
                    $('.search-result').each(function () {
                        var _this = $(this);
                        var dc = _this.find('.discount-value h3').text();
                        // if click filter by %
                        if (dc.indexOf('$') > -1 || dc === 'CODE') {
                            _this.hide();
                        } else {
                            _this.show();
                        }
                    });
                } else if (vl.indexOf('$') > -1) {
                    $('.search-result').each(function () {
                        var _this = $(this);
                        var dc = _this.find('.discount-value h3').text();
                        // if click filter by %
                        if (dc.indexOf('%') > -1 || dc === 'CODE') {
                            _this.hide();
                        } else {
                            _this.show();
                        }
                    });
                }
            })
        });

        function showmore(is) {
            $(is).css('color', 'inherit');
            $(is).html($(is).find('.hidden').html());
            $(is).parents('.panel').eq(0).css('height', 'auto');
        }

    </script>
@endsection