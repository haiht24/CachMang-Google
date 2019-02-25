@extends('app')
@section('content')
    <div class="row">
        <div class="col-xs-12"><h1 class="text-primary keyword" data-value="{{ $q }}">{{ !empty($q) ? ucwords($q):'Result page' }}</h1></div>
        <div class="col-xs-12 box-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ !empty($q) ? str_ireplace(' ', '-', $q):'#' }}">{{ !empty($q) ? ucwords($q):'' }}</a></li>
            </ol>
        </div>
        <hr>
        <div class="col-xs-12">
            {{--Related keywords--}}
            @if(!empty($related))
                <div class="col-xs-4 npd-lr">
                    @include('GA.google-adsense')
                </div>
                <div class="col-xs-8 npd-lr">
                    @foreach($related as $r)
                        @if(!empty($r))
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <p>
                                {{-- Neu co keyword mac dinh --}}
                                @if(!empty($r->title))
                                    @if(env('KEYWORD'))
                                        @if(strpos(strtolower($r->title),env('KEYWORD')) === false)
                                        › <a class="related_keywords" href="{{ url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%','',$r->title . ' ' . env('KEYWORD'))) }}">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r->title . ' ' . env('KEYWORD'))) !!}</a>
                                        @else
                                        › <a class="related_keywords" href="{{ url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%','',$r->title)) }}">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r->title)) !!}</a>
                                        @endif
                                    @else
                                        › <a class="related_keywords" href="{{ url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%','',$r->title)) }}">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r->title)) !!}</a>
                                    @endif
                                @else
                                    @if(env('KEYWORD'))
                                        @if(strpos(strtolower($r),env('KEYWORD')) === false)
                                            › <a class="related_keywords" href="{{ url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%','',$r . ' ' . env('KEYWORD'))) }}">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r . ' ' . env('KEYWORD'))) !!}</a>
                                        @else
                                            › <a class="related_keywords" href="{{ url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%','',$r)) }}">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r)) !!}</a>
                                        @endif
                                    @else
                                        › <a class="related_keywords" href="{{ url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%','',$r)) }}">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r)) !!}</a>
                                    @endif
                                @endif
                            </p>
                        </div>
                        @endif
                    @endforeach
                </div>
            @endif
            <h3 class="text-primary npd-lr col-xs-12"> Listing Websites about {{ ucwords($q) }}</h3>
            <div class="col-md-12 col-xs-12 npd-lr row" style="margin-bottom:10px">
                <div class="col-xs-8">
                    <strong>Filter Type:</strong>
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
            <div class="col-xs-8 npd-lr">
 
                @include('custom-ads.ads-head')
                @if(count($results) > 0)
					<?php $from = 'DB'; ?>
                    @if($from === 'ASK')
                        @foreach($results as $k=>$result)
                            @if($k === 2 || $k === 6 || $k === 9)
                                <div class="alert alert-info search-result col-xs-12">
                                    @include('GA.google-adsense')
                                </div>
                            @endif
                            @if($result && !empty($result['url']))
                                <div class="alert alert-info search-result col-xs-12">
                                    <div class="col-xs-12 npd-lr"><h3 class="text-primary title">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}</h3></div>
                                    <div class="col-xs-12 npd-lr">
                                        <div class="col-xs-2 npd-lr">
                                            <?php
                                            preg_match('/\$([0-9]+[\.]*[0-9]*) off|\$([0-9]+[\.]*[0-9]*) Off|\$([0-9]+[\.]*[0-9]*)/', $result['title'], $findDollar);
                                            preg_match('/([0-9]+[\.]*[0-9]*)\% Off|([0-9]+[\.]*[0-9]*)\% off|([0-9]+[\.]*[0-9]*)\%/', $result['title'], $findPercent);
                                            ?>
                                            <button class="btn {{ !empty($findDollar) ? 'btn-warning' : (!empty($findPercent) ? 'btn-primary' : 'btn-default') }}  pull-left discount-value" style="margin-right:10px"><h3>{{ !empty($findDollar) ? strtolower($findDollar[0]) : (!empty($findPercent) ? strtolower($findPercent[0]) : 'CODE') }}</h3></button>
                                        </div>
                                        <div class="col-xs-10 npd-lr">
                                            {{--<span class="label label-success"><em>(1 seconds ago)</em></span>--}}
                                            @if(!empty($result['description']))
                                            <span class="rs-description">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['description'])) !!}</span>
                                            @endif
                                            <p class="result-url">
                                                {{ str_limit(html_entity_decode($result['url']),80) }}
                                                <sup><a href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}" target="_blank" rel="nofollow"><span class="fa fa-external-link"></span></a></sup>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <input type="hidden" id="isFromSERP" value="1">
                    @elseif($from === 'SERP')
                        @foreach($results as $k=>$result)
                            @if($k === 2 || $k === 6 || $k === 9)
                                <div class="alert alert-info search-result col-xs-12">
                                    @include('GA.google-adsense')
                                </div>
                            @endif
                            {{--@if($result->is('classical'))--}}
                            <div class="alert alert-info search-result col-xs-12">
                                <div class="col-xs-12 npd-lr"><h3 class="text-primary title">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result->title)) !!}</h3></div>
                                <div class="col-xs-12 npd-lr">
                                    <div class="col-xs-2 npd-lr">
                                        <?php
                                        preg_match('/\$([0-9]+[\.]*[0-9]*) off|\$([0-9]+[\.]*[0-9]*) Off|\$([0-9]+[\.]*[0-9]*)/', $result->title, $findDollar);
                                        preg_match('/([0-9]+[\.]*[0-9]*)\% Off|([0-9]+[\.]*[0-9]*)\% off|([0-9]+[\.]*[0-9]*)\%/', $result->title, $findPercent);
                                        ?>
                                        <button class="btn {{ !empty($findDollar) ? 'btn-warning' : (!empty($findPercent) ? 'btn-primary' : 'btn-default') }}  pull-left discount-value" style="margin-right:10px"><h3>{{ !empty($findDollar) ? strtolower($findDollar[0]) : (!empty($findPercent) ? strtolower($findPercent[0]) : 'CODE') }}</h3></button>
                                    </div>
                                    <div class="col-xs-10 npd-lr">
                                        {{--Tam disable vi loi carbon trailing data--}}
                                        {{--@if(!empty($result->updated_at))--}}
                                        {{--<span class="label label-success"><em>({{ $result->updated_at->diffForHumans() }})</em></span>--}}
                                        {{--@else--}}
                                        {{--<span class="label label-success"><em>(1 seconds ago)</em></span>--}}
                                        {{--@endif--}}
                                        {{--<span class="label label-success"><em>(1 seconds ago)</em></span>--}}
                                        <span class="rs-description">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result->description)) !!}</span>
                                        <p class="result-url">
                                            {{ str_limit(html_entity_decode($result->url),80) }}
                                            <sup><a href="{{ strpos($result->url,'http') === false ? 'http://'.$result->url : $result->url }}" target="_blank" rel="nofollow"><span class="fa fa-external-link"></span></a></sup>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{--@endif--}}
                        @endforeach
                        <input type="hidden" id="isFromSERP" value="1">
                    @elseif($from === 'DB')
                        @foreach($results as $k=>$result)
                            @if($k === 2 || $k === 6 || $k === 9)
                                <div class="alert alert-info search-result col-xs-12">
                                    @include('GA.google-adsense')
                                </div>
                            @endif
                            <div class="alert alert-info search-result col-xs-12">
                                <div class="col-xs-12 npd-lr"><h3 class="text-primary title">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}</h3></div>
                                <div class="col-xs-12 npd-lr">
                                    <div class="col-xs-2 npd-lr">
                                        <?php
                                        preg_match('/\$([0-9]+[\.]*[0-9]*) off|\$([0-9]+[\.]*[0-9]*) Off|\$([0-9]+[\.]*[0-9]*)/', $result['title'], $findDollar);
                                        preg_match('/([0-9]+[\.]*[0-9]*)\% Off|([0-9]+[\.]*[0-9]*)\% off|([0-9]+[\.]*[0-9]*)\%/', $result['title'], $findPercent);
                                        ?>
                                        <button class="btn {{ !empty($findDollar) ? 'btn-warning' : (!empty($findPercent) ? 'btn-primary' : 'btn-default') }}  pull-left discount-value" style="margin-right:10px"><h3>{{ !empty($findDollar) ? strtolower($findDollar[0]) : (!empty($findPercent) ? strtolower($findPercent[0]) : 'CODE') }}</h3></button>
                                    </div>
                                    <div class="col-xs-10 npd-lr">
                                        <span class="label label-success"><em>(1 seconds ago)</em></span>
                                        <span class="rs-description">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['description'])) !!}</span>
                                        <p class="result-url">
                                            {{ str_limit(html_entity_decode($result['url']),80) }}
                                            <sup><a href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}" target="_blank" rel="nofollow"><span class="fa fa-external-link"></span></a></sup>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endif
                <input type="hidden" id="isFromSERP" value="1">
                {{--@include('custom-ads.ads-foot')--}}
            </div>

            {{--Right side bar--}}
            <div class="col-md-4 col-xs-12">
                {{--Discount upto--}}
                {{--<div class="list-group">--}}
                {{--<h3 style="margin-top:0px" class="list-group-item active">--}}
                {{--Filter--}}
                {{--</h3>--}}
                {{--<p class="list-group-item">--}}
                {{--<button class="btn btn-default" name="filterValue" value="$">--}}
                {{--<input type="radio" name="raCheck"> <strong>$ Off</strong>--}}
                {{--</button>--}}
                {{--<button class="btn btn-default" name="filterValue" value="%">--}}
                {{--<input type="radio" name="raCheck"> <strong>% Off</strong>--}}
                {{--</button>--}}
                {{--<button class="btn btn-default" name="filterValue" value="all">--}}
                {{--<input type="radio" name="raCheck" checked> All--}}
                {{--</button>--}}
                {{--</p>--}}
                {{--</div>--}}

                <div class="list-group">
                    @include('GA.google-adsense')
                </div>
                {{--Last search 24h--}}
                @if(!empty($lastSearch24h))
                    <div class="list-group">
                        <h3 class="list-group-item active" style="margin-top: 0 !important;">Past 24 hours</h3>
                        @foreach($lastSearch24h as $k=>$rs)
                            <a href="{{ url('/' . $rs->kw_slug) }}" title="{{ $rs->keyword_text }}" class="list-group-item last-search-24h">
                                {{--Tam disable vi loi carbon trailing data--}}
                                {{--@if(!empty($rs->updated_at))--}}
                                {{--<button class="btn btn-default pull-left" style="margin-right:10px">{{ $rs->updated_at->diffForHumans() }}</button>{{ ucwords($rs->keyword_text) }}--}}
                                {{ ucwords($rs->keyword_text) }}
                                {{--@endif--}}
                                {{--<button class="btn btn-default pull-left" style="margin-right:10px">{{ get_timeago($rs->updated_at) }}</button>{{ ucwords($rs->keyword_text) }}--}}
                            </a>
                        @endforeach
                    </div>
                @endif
                {{--Top search--}}
                <div class="list-group">
                    @include('GA.google-adsense')
                </div>
                @if(!empty($topSearch))
                    <div class="list-group">
                        <h3 class="list-group-item active">Trending now</h3>
                        @foreach($topSearch as $rs)
                            <a href="{{ url('/' . $rs->kw_slug) }}" title="{{ $rs->keyword_text }}" class="list-group-item">
                                <h4 class="text-primary">{{ ucwords($rs->keyword_text) }}</h4>
                            </a>
                        @endforeach
                    </div>
                @endif

                {{--Recently search--}}
                @if(!empty($recentlySearch))
                    <div class="list-group">
                        <h3 class="list-group-item active">Recently Searched</h3>
                        @foreach($recentlySearch as $rs)
                            <a href="{{ url('/' . $rs->kw_slug) }}" title="{{ $rs->keyword_text }}" class="list-group-item">
                                <h4 class="text-primary">{{ ucwords($rs->keyword_text) }}</h4>
                            </a>
                        @endforeach
                    </div>
                @endif
                <div class="list-group">
                    @include('GA.google-adsense')
                </div>
            </div>
        </div>
    </div>
<input type="hidden" class="keyword" data-value="{{ $q }}">
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            console.log($('#isFromSERP').val() == 1 ? 'SERP' : 'DB');
            if($('#isFromSERP').val() == 1){
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
                $.post(url + '/save', {results: JSON.stringify(results), currentKeyword: currentKeyword, relatedKeywords: relatedKeywords}, function (response) {
                    console.log(response);
                })
            }

            /* Filter discount value */
            $('button[name=filterValue]').click(function () {
                var t = $(this);
                var vl = t.text().trim();
//                console.log('click ',vl);
                t.find('input[name=raCheck]').prop("checked", true);
                if(vl.indexOf('All') > -1){
                    $('.search-result').show();
                    return;
                }
                if(vl.indexOf('%') > -1){
                    $('.search-result').each(function () {
                        var _this = $(this);
                        var dc = _this.find('.discount-value h3').text();
                        // if click filter by %
                        if(dc.indexOf('$') > -1 || dc === 'CODE'){
                            _this.hide();
                        }else{
                            _this.show();
                        }
                    });
                }else if(vl.indexOf('$') > -1){
                    $('.search-result').each(function () {
                        var _this = $(this);
                        var dc = _this.find('.discount-value h3').text();
                        // if click filter by %
                        if(dc.indexOf('%') > -1 || dc === 'CODE'){
                            _this.hide();
                        }else{
                            _this.show();
                        }
                    });
                }
            })
        })
    </script>
@endsection