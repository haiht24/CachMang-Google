@extends('app-amp')
@section('content')
    <div class="container container-search" id="container_search " style="visibility: visible">
        <div class="row">
            <div class="content col-md-8 col-md-offset-1 col-lg-7 col-lg-offset-1">
                <div class="afs afs-loaded" id="afs1-block" style="background-color: rgb(255, 255, 255);">
                    <div class="search-result">
                        <div class="adv-results">
                            @include('custom-ads.ads-head')
                        </div>
                        <div class="web-results">
                            <h4>Kết quả Web</h4>
                            <div class="web-box-wrap">
                                @if(count($results) > 0)
                                    @foreach($results as $k=>$result)
                                        @if($k < 4)
                                            <div class="web-content">
                                                <div class="top-title">
                                                    <?php $title = html_entity_decode(str_ireplace($q, '<b>' . ucwords($q) . '</b>', $result['title'])) ?>
                                                    <a target="_blank"
                                                       href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}">
                                                        <span>{!! $title !!}</span>
                                                    </a>
                                                </div>
                                                <div class="link-web-area">
                                                    <span  class="link-website">{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}</span>
                                                </div>
                                                @if(!empty($result['description']))
                                                    <div class="link-description">
                                                        <span>{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['description'])) !!}</span>
                                                    </div>
                                                @endif
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="related-results-search">
                            @if(!empty($related))
                                <h4>Tìm kiếm liên quan đến <b>{{ $q }}</b></h4>
                                @foreach($related as $r)
                                    @if(!empty($r))
                                        <div class="row">
                                            <div class="col-md-6 col-xs-12">
                                                <?php
                                                $href = url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%', '', strtolower($r)));
                                                if (strpos($href, 'jobs') === false || strpos($href, 'job') === false)
                                                    $href .= '-jobs';
                                                ?>
                                                <ul>
                                                    <li>
                                                        <a title="{!! strip_tags($r) !!}"
                                                           href="{{ $href }}">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r )) !!}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        <div class="web-results">
                            <div class="web-box-wrap">
                                @if(count($results) > 0)
                                    @foreach($results as $k=>$result)
                                        @if($k >4 && $k <= 8)
                                            <div class="web-content">
                                                <div class="top-title">
                                                    <?php $title = html_entity_decode(str_ireplace($q, '<b>' . ucwords($q) . '</b>', $result['title'])) ?>
                                                    <a target="_blank"
                                                       href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}">
                                                        <span>{!! $title !!}</span>
                                                    </a>
                                                </div>
                                                <div class="link-web-area">
                                                    <span class="link-website">{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}</span>
                                                </div>
                                                @if(!empty($result['description']))
                                                    <div class="link-description">
                                                        <span>{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['description'])) !!}</span>
                                                    </div>
                                                @endif
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="adv-results">
                            @include('custom-ads.ads-foot')
                            <input type="hidden" id="isFromSERP" value="1">
                        </div>
                        <div class="related-results-search">
                            @if(!empty($related))
                                <h4>Tìm kiếm liên quan đến <b>{{ $q }}</b></h4>
                                @foreach($related as $r)
                                    @if(!empty($r))
                                        <div class="row">
                                            <div class="col-md-6 col-xs-12">
                                                <?php
                                                $href = url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%', '', strtolower($r)));
                                                if (strpos($href, 'jobs') === false || strpos($href, 'job') === false)
                                                    $href .= '-jobs';
                                                ?>
                                                <ul>
                                                    <li>
                                                        <a title="{!! strip_tags($r) !!}"
                                                           href="{{ $href }}">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r )) !!}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        @include('elements.search-bar-amp')
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="right-content">
                    <div class="related-results-search">
                        @if(!empty($related))
                            <h4>Tìm kiếm liên quan đến <b>{{ $q }}</b></h4>
                            @foreach($related as $r)
                                @if(!empty($r))
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <?php
                                            $href = url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%', '', strtolower($r)));
                                            if (strpos($href, 'jobs') === false || strpos($href, 'job') === false)
                                                $href .= '-jobs';
                                            ?>
                                            <ul>
                                                <li>
                                                    <a title="{!! strip_tags($r) !!}"
                                                       href="{{ $href }}">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r )) !!}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                    <div class="right-adv-box">
                        @include('custom-ads.ads-right')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" class="keyword" data-value="{{ $q }}">
@endsection