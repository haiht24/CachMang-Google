@extends('app')
@section('content')
    <div class="col-lg-offset-1 col-md-offset-1 container-padding-left">
        <div class="col-md-12">
            <div class="col-md-8 con-results">
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
                                <a rel="nofollow" target="_blank" title="{{ $result['title'] }}" href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $result['title'])) !!}</a>
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
                                            <div class="ext-title"><a href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}" title="{{ $ex['title'] }}">{{ $ex['title'] }}</a></div>
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
            @if(!empty($related))
            <div class="col-md-3 col-xs-12 npd-lr related-keywords">
                <div class="title-related-keywords">
                    <span>Searches related to <h1>{{ $q }}</h1></span>
                </div>
                @foreach($related as $r)
                    @if(!empty($r))
                        <div class="npd-lr">
                            <a class="related_keywords" href="{{ url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%','',$r)) }}" title="{{ $q }}">
                                <h3>{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r )) !!}</h3>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
            @endif
            {{--<div class="col-md-4 col-sm-6 col-xs-12 con-ads">--}}
                {{--@include('Google.adsense')--}}
            {{--</div>--}}
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
                    relatedKeywords.push(t.text().trim());
                });
                $.post(url + '/save', {results: JSON.stringify(results), currentKeyword: currentKeyword, relatedKeywords: relatedKeywords}, function (response) {
                    console.log(response);
                })
            }
        })
    </script>
@endsection