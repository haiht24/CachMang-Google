@extends('app-amp')
@section('content')
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="wrap-results">
                @include('custom-ads.ads-head')
                @if(count($results) > 0)
                    @foreach($results as $k=>$result)
                            @if($k === 2 || $k === 6 || $k === 9)
                                <div class="alert search-result col-xs-12">
                                    @include('Google.adsense')
                                </div>
                            @endif
                        @if($result && !empty($result['url']))
                            <div class="box-result search-result">
                                <p class="result-title">
                                    <h3 class="title">
                                    <?php $title=html_entity_decode(str_ireplace($q, '<b>'.ucwords($q).'</b>', $result['title'])); ?>
                                        <a target="_blank" href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}" {!! $rel_ex !!}>{!! $title !!}</a>
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
                                <div class="alert search-result col-xs-12">
                                    @include('Google.adsense')
                                </div>
                            @endif
                        <div class="box-result search-result">
                            <p class="result-title">
                            <h3 class="title">
                                <?php $title = html_entity_decode(str_ireplace($q, '<b>'.ucwords($q).'</b>', $result['title'])) ?>
                        @if(empty($result['type']) || $result['type'] !== 'fake')
								<a target="_blank" href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}" {!! $rel_ex !!}>{!! $title !!}</a>
						@else
							{!! $title !!}
						@endif
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
                                <div class="alert search-result col-xs-12">
                                    @include('Google.adsense')
                                </div>
                            @endif
                            <div class="box-result search-result">
                                <p class="result-title">
                                <h3 class="title">
                                    <?php $title = html_entity_decode(str_ireplace($q, '<b>'.ucwords($q).'</b>', $result['title'])) ?>
                                    <a target="_blank" href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}" {!! $rel_ex !!}>{!! $title !!}</a>
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

                <input type="hidden" id="isFromSERP" value="1">
                {{--@include('custom-ads.ads-foot')--}}
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            @if(!empty($related))
                <div class="related-keywords">
                    <h3>Searches related to <b>{{ $q }}</b></h3>
                    @foreach($related as $r)
                        @if(!empty($r))
                            <div class="col-md-12 npd-lr">
                                <?php
                                $href = url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%','',strtolower($r)));
                                if(strpos($href,'jobs') === false || strpos($href,'job') === false)
                                    $href .= '-jobs';
                                ?>
                                <a title="{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r )) !!}" class="related_keywords" href="{{ $href }}">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r )) !!}</a>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
    </div>
    <input type="hidden" class="keyword" data-value="{{ $q }}">
@endsection
