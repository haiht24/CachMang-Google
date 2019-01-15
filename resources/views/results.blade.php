@extends('app')
@section('content')
    <div class="container">
        <div class="col-md-12 col-md-offset-1">
            <div class="col-md-8 con-results">
                @if(count($results) > 0)
                    @foreach($results as $k=>$result)
                        @if(!empty($result['url']))
                        @if($k === 2 || $k === 6 || $k === 9)
                            {{--<div class="alert search-result col-xs-12">--}}
                                {{--@include('GA.google-adsense')--}}
                            {{--</div>--}}
                        @endif
                        <div class="box-result">
                            <p class="result-title"><a target="_blank" href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}</a></p>
                            <p class="result-url">
                                {{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}
                            </p>
                            @if(!empty($result['description']))
                                <p class="result-description">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['description'])) !!}</p>
                            @endif
                        </div>
                        @endif
                    @endforeach
                    <input type="hidden" id="isFromSERP" value="1">
                @endif

                @if(!empty($related))
                    <div class="col-md-12 col-sm-6 col-xs-12 npd-lr related-keywords">
                        <h3>Searches related to <b>{{ $q }}</b></h3>
                        @foreach($related as $r)
                            @if(!empty($r))
                                <div class="col-md-6 npd-lr">
                                    <a href="{{ url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%','',$r)) }}">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r )) !!}</a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>
            {{--<div class="col-md-4 col-sm-6 col-xs-12 con-ads">--}}
                {{--@include('GA.google-adsense')--}}
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
                    relatedKeywords.push(t.text());
                });
                $.post(url + '/save', {results: JSON.stringify(results), currentKeyword: currentKeyword, relatedKeywords: relatedKeywords}, function (response) {
                    console.log(response);
                })
            }
        })
    </script>
@endsection