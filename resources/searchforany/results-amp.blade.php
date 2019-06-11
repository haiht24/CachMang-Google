@extends('app-amp')
@section('content')
        <div class="">
               @include('custom-ads.ads-head')
            @if(count($results) > 0)
				<?php $from = 'DB'; ?>
                @if($from === 'ASK')
                    @foreach($results as $k=>$result)
                            @if($k === 2 || $k === 6 || $k === 9)
                                <div class="search-result col-md-6 col-xs-12">
                                    <div class="panel panel-default" style="height:180px;overflow:hidden">
                                        <div class="panel-body">
                                            @include('Google.adsense')
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @if($result && !empty($result['url']))
                            <div class="box-result search-result">
                                <p class="result-title">
                                    <h3 class="title">
                                    <?php $title=html_entity_decode(str_ireplace($q, '<b>'.ucwords($q).'</b>', $result['title'])); ?>
                                        <a target="_blank" href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}">{!! $title !!}</a>
                                    </h3>
                                </p>
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

                        @endif
                    @endforeach
                    <input type="hidden" id="isFromSERP" value="1">
                @elseif($from === 'SERP')
                    @foreach($results as $k=>$result)
                            @if($k === 2 || $k === 6 || $k === 9)
                                <div class="search-result col-md-6 col-xs-12">
                                    <div class="panel panel-default" style="height:180px;overflow:hidden">
                                        <div class="panel-body">
                                            @include('Google.adsense')
                                        </div>
                                    </div>
                                </div>
                            @endif
                        <div class="box-result search-result">
                            <p class="result-title">
                                <h3 class="title">
                                <?php $title = html_entity_decode(str_ireplace($q, '<b>'.ucwords($q).'</b>', $result['title'])) ?>
                                    <a target="_blank" href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}">{!! $title !!}</a>
                                </h3>
                            </p>
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
                                <div class="search-result col-md-6 col-xs-12">
                                    <div class="panel panel-default" style="height:180px;overflow:hidden">
                                        <div class="panel-body">
                                            @include('Google.adsense')
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="box-result search-result">
                                <p class="result-title">
                                <h3 class="title">
                                    <?php $title = html_entity_decode(str_ireplace($q, '<b>'.ucwords($q).'</b>', $result['title'])) ?>
                                    <a target="_blank" href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}">{!! $title !!}</a>
                                </h3>
                                </p>
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
                @endif
            @endif
			
                <input type="hidden" id="isFromSERP" value="1">
                {{--@include('custom-ads.ads-foot')--}}
        </div>

    <input type="hidden" class="keyword" data-value="{{ $q }}">
@endsection
