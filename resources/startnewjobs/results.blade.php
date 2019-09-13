@extends('app')
@section('content')
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="col-xs-12 npd-lr">
            <h1>{{ $q }}</h1>
        </div>
        <h2>Listing Website about {{ ucwords($q) }}</h2>
        @include('custom-ads.ads-head')
        @if(count($results) > 0)
            @foreach($results as $k=>$result)
                @if(0) if($k === 2 || $k === 6 || $k === 9)
                <div class="alert col-xs-12">
                    @include('Google.adsense')
                </div>
                @endif
                <div class="box-result">
                    <h3 class="title">
                        @if(empty($result['type']) || $result['type'] !== 'fake')
                            <a title="{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}"
                               target="_blank"
                               href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}" {!! $rel_ex !!}>{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}</a>
                        @else
                            {!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}
                        @endif
                    </h3>
                    @if(empty($result['type']) || $result['type'] !== 'fake')
                        <p class="result-url">
                            {{--@if($k<3)--}}
                            {{--<span class="ad">Ad</span>--}}
                            {{--@endif--}}
                            {{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}
                        </p>
                    @endif
                    @if(!empty($result['description']))
                        <p class="result-description rs-description">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['description'])) !!}</p>
                    @endif
                </div>
            @endforeach
        @endif
        <input type="hidden" id="isFromSERP" value="1">
        {{--@include('custom-ads.ads-foot')--}}
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 con-ads">
        @if(!empty($related))
            <div class="">
                <h2>Searches related to <b>{{ $q }}</b></h2>
                @foreach($related as $r)
                    @if(!empty($r))
                        <div class="related-keywords">
                            <?php
                            $href = url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%', '', strtolower($r)));

                            ?>
                            <a title="{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r )) !!}"
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
    <input type="hidden" class="keyword" data-value="{{ $q }}">




    <div class="row" style="text-align: left;padding: 20px;">
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
        })
    </script>
@endsection