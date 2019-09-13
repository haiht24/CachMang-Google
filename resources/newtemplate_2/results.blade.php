@extends('app')
@section('amp-page')
<link rel="amphtml" href="{{ route('search', ['q'=> str_slug($q)]) }}">
@endsection
@section('content')
    <?php $col_left = '8'; ?>
    <div class="row" style="margin-left:0px;margin-right:0px">
        <div class="s-result col-lg-{{$col_left}} col-md-{{$col_left}} col-sm-12 col-xs-12">
            <div class="wrap-results">
                <h1>{{ ucwords($q) }}</h1>
                <h2>Listing Website about {{ ucwords($q) }}</h2>
                @include('custom-ads.ads-head')
                @if(count($results) > 0)
                    @foreach($results as $k=>$result)
                        <?php  $sk = $k % 3; $searchklass = $sk == 0 ? 1 : ($sk == 1 ? 2 : 3); ?>
                        @if(0) if($k === 2 || $k === 6 || $k === 9)
                        <div class="search-result col-md-6 col-xs-12 col-lg-6 col-sm-12">
                            <div class="panel panel-default search-{{ $searchklass }}">
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
                        <div class="search-result col-md-12 col-xs-12 col-lg-12 col-sm-12">
                            <div class="panel panel-default search-{{ $searchklass }}">
                                <div class="panel-body">
                                    @if(empty($result['type']) || $result['type'] !== 'fake')
                                        <a href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}"
                                           target="_blank" {!! $rel_ex !!}>
                                            <h3 class="text-primary">{!! html_entity_decode(str_ireplace([$q, $result['url']], ['<b>'.$q.'</b>', ''], $result['title'])) !!}</h3>
                                        </a>
                                    @else
                                        <h3 class="text-primary">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}</h3>
                                    @endif
                                    <span class="btn btn-warning  pull-left discount-value" style="margin-right:10px">
									<p>{{ !empty($findDollar) ? strtolower($findDollar[0]) : (!empty($findPercent) ? strtolower($findPercent[0]) : 'CODE') }}</p>
									</span>
                                    @if(!empty($result['description']))
                                        <p class="rs-description">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', isset($result['description']{120})?substr($result['description'],0,120).'<span onclick="showmore(this)" style="color:blue"><span class="hidden">'.substr($result['description'],120).'</span>...more</span>':$result['description'])) !!}</p>
                                    @endif
                                    @if(empty($result['type']) || $result['type'] !== 'fake')
                                        <p class="result-url">
                                            {{ str_limit(html_entity_decode($result['url']),60) }}
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
        </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding:10px">
                @if(!empty($related))
                <div class="pnel">
                    <h2>Searches related to <b>{{ $q }}</b></h2>
                    @foreach($related as $r)
                        @if(!empty($r))
                            <div class="rl-row">
                                <?php
                                $href = url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%', '', strtolower($r)));

                                ?>
                                <a title="{!! strip_tags($r) !!}"
                                   class="related_keywords"
                                   href="{{ $href }}">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r )) !!}</a>
                            </div>
                        @endif
                    @endforeach
                </div>
                @endif
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
                console.log('currentKeyword:', currentKeyword);
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
        });

        function showmore(is) {
            $(is).css('color', 'inherit');
            $(is).html($(is).find('.hidden').html());
            $(is).parents('.panel').eq(0).css('height', 'auto');
            $(is).parents('.search-result').eq(0).css('height', 'auto');
            $(is).parents('.search-result').eq(0).css('max-height', 'auto');
        }
    </script>
@endsection