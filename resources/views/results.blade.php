@extends('app')
@section('amp-page')
    <link rel="amphtml" href="{{ route('search', ['q'=> str_slug($q)]) }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="col-md-offset-2">
                <div class="col-md-8 con-results">
                    <div class="head-results">
                        <h1>Listing Website about {{ ucwords($q) }}</h1>
                        <h2>{{ ucwords($q) }}</h2>
                    </div>
                    @include('custom-ads.ads-head')
                    @if(count($results) > 0)
                        @foreach($results as $k=>$result)
                            @if(!empty($result['url']))
                                @if(0) if($k === 2 || $k === 6 || $k === 9)
                                {{--<div class="alert search-result col-xs-12">--}}
                                {{--@include('Google.adsense')--}}
                                {{--</div>--}}
                                @endif
                                <div class="box-result col-xs-12">
                                    <div class="result-title">
                                        <h3>
                                            <a rel="nofollow" target="_blank" title="{{ $result['title'] }}"
                                               href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $result['title'])) !!}</a>
                                        </h3>
                                    </div>
                                    <p class="result-url">
                                        {{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}
                                    </p>
                                    @if(!empty($result['description']))
                                        <p class="result-description">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $result['description'])) !!}</p>
                                    @endif

                                    @if(!empty($result['extend_url']))
                                        <div class="col-md-12">
                                            @foreach($result['extend_url'] as $ex)
                                                <div class="col-md-6 ext-result">
                                                    <div class="ext-title"><a
                                                                href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}"
                                                                title="{{ $ex['title'] }}">{{ $ex['title'] }}</a></div>
                                                    <div class="ext-desc">{{ $ex['description'] }}</div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            @endif
                        @endforeach
                        <input type="hidden" id="isFromSERP" value="1">
                    @endif
                </div>
                <div class="col-md-4 col-xs-12 npd-lr related-keywords">

                    {{--Top search--}}
                    @if(!empty($popularSearch))
                        <div class="list-group">
                            <h2 class="list-group-item active">Popular Searched</h2>
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
                    @if(!empty($related))
                        <div class="list-group title-related-keywords">
                            <h2 class="list-group-item active">Searches related to {{ $q }}</h2>
                            @foreach($related as $r)
                                @if(!empty($r))
                                    <a class="list-group-item related_keywords"
                                       href="{{ url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%','',$r)) }}"
                                       title="{{ $q }}">
                                        <h3>{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r )) !!}</h3>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    @elseif (!empty($recentlySearch))
                        <div class="list-group">
                            <h2 class="list-group-item active">Recently Searched</h2>
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
            {{--<div class="col-md-4 col-sm-6 col-xs-12 con-ads">--}}
            {{--@include('Google.adsense')--}}
            {{--</div>--}}
        </div>

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
                    relatedKeywords.push(t.text().trim());
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