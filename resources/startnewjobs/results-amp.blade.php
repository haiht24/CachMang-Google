@extends('app-amp')
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
            @endif
            <h3 class="text-primary npd-lr col-xs-12"> Listing Websites about {{ ucwords($q) }}</h3>

            {{--Result search--}}
            <div class="col-xs-12 npd-lr">
            @include('custom-ads.ads-head')
            @if(count($results) > 0)
				<?php $from = 'DB'; ?>
                @if($from === 'ASK')
                    @foreach($results as $k=>$result)
                            @if($k === 2 || $k === 6 || $k === 9)
                                <div class="alert col-xs-12">
                                    @include('Google.adsense')
                                </div>
                            @endif
                        @if($result && !empty($result['url']))
                            <div class="box-result search-result">
                                    <h3 class="title result-title">
									@if(empty($result['type']) || $result['type'] !== 'fake')
                                        <a title="{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}" target="_blank" href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}" {!! $rel_ex !!}>{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}</a>
									@else
										{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}
									@endif
                                    </h3>
                                <p class="result-url trim-text">
                                    {{--@if($k<3)--}}
                                        {{--<span class="ad">Ad</span>--}}
                                    {{--@endif--}}
                                    {{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}
                                </p>
                                @if(!empty($result['description']))
                                    <p class="result-description rs-description">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['description'])) !!}</p>
                                @endif
                            </div>

                        @endif
                    @endforeach
                    <input type="hidden" id="isFromSERP" value="1">
                @elseif($from === 'SERP')
                    @foreach($results as $k=>$result)
                            @if($k === 2 || $k === 6 || $k === 9)
                                <div class="alert col-xs-12">
                                    @include('Google.adsense')
                                </div>
                            @endif
                        <div class="box-result">
                                <h3 class="title">
                                    <a title="{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}" target="_blank" href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}" {!! $rel_ex !!}>{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}</a>
                                </h3>
                            <p class="result-url">
                                {{--@if($k<3)--}}
                                {{--<span class="ad">Ad</span>--}}
                                {{--@endif--}}
                                {{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}
                            </p>
                            @if(!empty($result['description']))
                                <p class="result-description rs-description">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['description'])) !!}</p>
                            @endif
                        </div>
                    @endforeach
                    <input type="hidden" id="isFromSERP" value="1">
                @elseif($from === 'DB')
                    @foreach($results as $k=>$result)
                            @if($k === 2 || $k === 6 || $k === 9)
                                <div class="alert col-xs-12">
                                    @include('Google.adsense')
                                </div>
                            @endif
                            <div class="box-result">
                                    <h3 class="title">
                                        <a title="{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}" target="_blank" href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}" {!! $rel_ex !!}>{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}</a>
                                    </h3>
                                <p class="result-url"><a title="{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}" target="_blank" href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}" {!! $rel_ex !!}>
                                    {{--@if($k<3)--}}
                                    {{--<span class="ad">Ad</span>--}}
                                    {{--@endif--}}
                                    {{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}
                                </a></p>
                                @if(!empty($result['description']))
                                    <p class="result-description rs-description">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['description'])) !!}</p>
                                @endif
                            </div>
                    @endforeach
                @endif
            @endif
                {{--@include('custom-ads.ads-foot')--}}
            </div>

            {{--Right side bar--}}
            <div class="col-md-4 col-xs-12">

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
            </div>
        </div>
    </div>
@endsection