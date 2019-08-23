@extends('app')
@section('content')
    <div class="row">
        <div class="row">
            <div class="col-md-4 col-xs-12">
            @include('Google.adsense')
            <!-- google ads -->
            </div>
            <div class="col-md-8 col-xs-12">
                <h1 class="text-primary">{{ !empty($q) ? ucwords($q):'Result page' }}</h1>
                <div class="col-xs-12 box-breadcrumb" style="padding-left: 0px">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>
                            <a href="{{ !empty($q) ? str_ireplace(' ', '-', $q):'#' }}">{{ !empty($q) ? ucwords($q):'' }}</a>
                        </li>
                    </ol>
                </div>
                <p>Share:
                    <a target="_blank"
                       href="https://www.facebook.com/sharer.php?u={{ 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] }}"
                       title="Facebook Share"><img src="{{ url('/') }}/images/fb.png"></a>
                    <a target="_blank"
                       href="https://plus.google.com/share?url={{ 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] }}"
                       title="Google Plus Share"><img src="{{ url('/') }}/images/gp.png"></a>
                    <a target="_blank"
                       href="https://twitter.com/share?url={{ 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] }}"
                       title="Twitter Share"><img src="{{ url('/') }}/images/tw.png"></a>
                    <a target="_blank"
                       href="https://www.linkedin.com/shareArticle?mini=true&amp;url={{ 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] }}"
                       title="LinkedIn Share"><img src="{{ url('/') }}/images/in.png"></a>
                    <a target="_blank"
                       href="https://pinterest.com/pin/create/button/?url={{ 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] }}"
                       title="Pinterest Share"><img src="{{ url('/') }}/images/pin.png"></a>
                    <a target="_blank"
                       href="http://www.stumbleupon.com/badge/?url={{ 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] }}"
                       title="StumbleUpon Share"><img src="{{ url('/') }}/images/su.png"></a>
                    <a target="_blank"
                       href="https://www.reddit.com/submit?url={{ 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] }}"
                       title="Reddit Share"><img src="{{ url('/') }}/images/rt.png"></a>
                    <a target="_blank"
                       href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site {{ 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] }}"
                       title="E-Mail Share"><img src="{{ url('/') }}/images/mail.png"></a>
                </p>
                @if(ENABLE_SEARCH_BOX)
                    <form class="form-inline" role="form" method="get" id="frmSearch" autocomplete="off">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Please put keyword here" id="q"
                                   name="q" value="" size="80">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit" name="submit"><i
                                            class="glyphicon glyphicon-search"></i> Search
                                </button>
                            </div>
                        </div>
                    </form>
                @endif

                <br>
                <div class="row">
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
                </div>
            </div>
        </div>
        <h3 class="text-primary npd-lr col-xs-12"> Listing Websites about {{ ucwords($q) }}</h3>
        <div class="col-md-12 col-xs-12 npd-lr row" style="margin-bottom:5px">
            <div class="col-xs-12">
                <strong class="filtertype">Filter Type:</strong>
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
        <div class=""><?php $from = 'DB'; ?>

            @include('custom-ads.ads-head')
            @if(count($results) > 0)
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
                            <?php
                            preg_match('/\$([0-9]+[\.]*[0-9]*) off|\$([0-9]+[\.]*[0-9]*) Off|\$([0-9]+[\.]*[0-9]*)/', $result['title'], $findDollar);
                            preg_match('/([0-9]+[\.]*[0-9]*)\% Off|([0-9]+[\.]*[0-9]*)\% off|([0-9]+[\.]*[0-9]*)\%/', $result['title'], $findPercent);
                            ?>
                            <div class="search-result col-md-6 col-xs-12">
                                <div class="panel panel-default" style="height:180px;overflow:hidden">
                                    <div class="panel-body"><h3 class="text-primary"
                                                                style="margin-top:0px">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}</h3>
                                        <span class="btn btn-warning  pull-left discount-value"
                                              style="margin-right:10px">
									<h3>{{ !empty($findDollar) ? strtolower($findDollar[0]) : (!empty($findPercent) ? strtolower($findPercent[0]) : 'CODE') }}</h3>
									</span>
                                        @if(!empty($result['description']))
                                            <span class="rs-description">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['description'])) !!}</span>
                                        @endif
                                        <p class="result-url">
                                            {{ str_limit(html_entity_decode($result['url']),80) }}
                                            <sup><a {!! $rel_ex !!} href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}"
                                                    target="_blank"><span
                                                            class="fa fa-external-link"></span></a></sup>
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
                            <div class="search-result col-md-6 col-xs-12">
                                <div class="panel panel-default" style="height:180px;overflow:hidden">
                                    <div class="panel-body">
                                        @include('Google.adsense')
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{--@if($result->is('classical'))--}}
                        <?php
                        preg_match('/\$([0-9]+[\.]*[0-9]*) off|\$([0-9]+[\.]*[0-9]*) Off|\$([0-9]+[\.]*[0-9]*)/', $result['title'], $findDollar);
                        preg_match('/([0-9]+[\.]*[0-9]*)\% Off|([0-9]+[\.]*[0-9]*)\% off|([0-9]+[\.]*[0-9]*)\%/', $result['title'], $findPercent);
                        ?>
                        <div class="search-result col-md-6 col-xs-12">
                            <div class="panel panel-default" style="height:180px;overflow:hidden">
                                <div class="panel-body"><h3 class="text-primary"
                                                            style="margin-top:0px">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}</h3>
                                    <span class="btn btn-warning  pull-left discount-value" style="margin-right:10px">
									<h3>{{ !empty($findDollar) ? strtolower($findDollar[0]) : (!empty($findPercent) ? strtolower($findPercent[0]) : 'CODE') }}</h3>
									</span>
                                    @if(!empty($result['description']))
                                        <span class="rs-description">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['description'])) !!}</span>
                                    @endif
                                    <p class="result-url">
                                        {{ str_limit(html_entity_decode($result['url']),80) }}
                                        <sup><a {!! $rel_ex !!} href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}"
                                                target="_blank"><span class="fa fa-external-link"></span></a></sup>
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
                            <div class="search-result col-md-6 col-xs-12">
                                <div class="panel panel-default" style="height:180px;overflow:hidden">
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
                        <div class="search-result col-md-6 col-xs-12">
                            <div class="panel panel-default" style="height:180px;overflow:hidden">
                                <div class="panel-body"><h3 class="text-primary"
                                                            style="margin-top:0px">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}</h3>
                                    <span class="btn btn-warning  pull-left discount-value" style="margin-right:10px">
									<h3>{{ !empty($findDollar) ? strtolower($findDollar[0]) : (!empty($findPercent) ? strtolower($findPercent[0]) : 'CODE') }}</h3>
									</span>
                                    @if(!empty($result['description']))
                                        <span class="rs-description">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', isset($result['description']{160})?substr($result['description'],0,160).'<span onclick="showmore(this)" style="color:blue"><span class="hidden">'.substr($result['description'],160).'</span>...more</span>':$result['description'])) !!}</span>
                                    @endif
                                    <p class="result-url">
                                        {{ str_limit(html_entity_decode($result['url']),80) }}
                                        <sup><a {!! $rel_ex !!} href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}"
                                                target="_blank"><span class="fa fa-external-link"></span></a></sup>
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
                @include('Google.adsense')
            </div>
            {{--Last search 24h--}}
            @if(!empty($lastSearch24h))
                <div class="list-group">
                    <h3 class="list-group-item active" style="margin-top: 0 !important;">Past 24 hours</h3>
                    @foreach($lastSearch24h as $k=>$rs)
                        <a href="{{ url('/' . $rs->kw_slug) }}" title="{{ $rs->keyword_text }}"
                           class="list-group-item last-search-24h">
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
                @include('Google.adsense')
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
                @include('Google.adsense')
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