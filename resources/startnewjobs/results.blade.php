@extends('app')
@section('content')
        <div class="col-md-8 col-sm-12 con-results">
            <div class="col-xs-12 npd-lr">
                <h1>{{ $q }}</h1>
            </div>
            <div class="alert col-xs-12">
                @include('GA.display')
            </div>
            @include('custom-ads.ads-head')
            @if(count($results) > 0)
                @if($from === 'ASK')
                    @foreach($results as $k=>$result)
                        @if($k === 2 || $k === 6 || $k === 9)
                            <div class="alert col-xs-12">
                                @include('GA.display')
                            </div>
                        @endif
                        @if($result && !empty($result['url']))
                            <div class="box-result search-result">
                                    <h3 class="title result-title">
                                        <a title="{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}" target="_blank" href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}</a>
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
                                @include('GA.display')
                            </div>
                        @endif
                        <div class="box-result">
                                <h3 class="title">
                                    <a title="{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}" target="_blank" href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}</a>
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
                                @include('GA.display')
                            </div>
                        @endif
                            <div class="box-result">
                                    <h3 class="title">
                                        <a title="{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}" target="_blank" href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}</a>
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
                @endif
            @endif
            @include('custom-ads.ads-foot')
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 con-ads">
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
            <div class="col-xs-12 npd-lr" style="padding-top: 30px">
                @include('GA.display')
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
        })
    </script>
@endsection