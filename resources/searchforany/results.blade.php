@extends('app')
@section('content')
        <div class="">
            <div class="row" style="margin-left:0px;margin-right:0px">
                <div class="s-result col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="wrap-results">
               @include('custom-ads.ads-head')
            @if(count($results) > 0)
                    @foreach($results as $k=>$result)
                        @if($k === 2 || $k === 6 || $k === 9)
                            <div class="search-result">
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
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="padding:10px">
        @if(!empty($related))
            <div class="pnel">
                <h3>Searches related to <b>{{ $q }}</b></h3>
                @foreach($related as $r)
                    @if(!empty($r))
                        <div class="rl-row">
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
        </div>
    <input type="hidden" class="keyword" data-value="{{ $q }}">
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            console.log($('#isFromSERP').val() == 1 ? 'SERP' : 'DB');
            if($('#isFromSERP').val() == 1){
                var currentKeyword = $('.keyword').data('value').trim();
                console.log('currentKeyword:',currentKeyword);
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