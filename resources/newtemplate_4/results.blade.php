@extends('app')
@section('content')
<div class="row" style="margin-left:0px;margin-right:0px">
	<div class="s-result col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <div class="wrap-results">
               @include('custom-ads.ads-head')
            @if(count($results) > 0)
                        @foreach($results as $k=>$result)
                           <?php  $sk = $k%3; $searchklass = $sk==0?1:($sk==1?2:3); ?>
                            @if($k === 2 || $k === 6 || $k === 9)
                                <div class="search-result">
                                    <div class="search-content search-{{ $searchklass }}">
                                        <div class="search-body">
                                           @include('Google.adsense')
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <?php
                            preg_match('/\$([0-9]+[\.]*[0-9]*) off|\$([0-9]+[\.]*[0-9]*) Off|\$([0-9]+[\.]*[0-9]*)/', $result['title'], $findDollar);
                            preg_match('/([0-9]+[\.]*[0-9]*)\% Off|([0-9]+[\.]*[0-9]*)\% off|([0-9]+[\.]*[0-9]*)\%/', $result['title'], $findPercent);
                            ?>
                            <div class="search-result">
                                <div class="search-content search-{{ $searchklass }}">
                                    <div class="search-body">
                                        <a href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}" target="_blank" {!! $rel_ex !!}>
                                            <h3 class="text-primary">
                                                <span class="btn btn-warning discount-value">
                                                {{ !empty($findDollar) ? strtolower($findDollar[0]) : (!empty($findPercent) ? strtolower($findPercent[0]) : 'CODE') }}
                                                </span>
                                                {!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}
                                            </h3>
                                        </a>
                                        @if(!empty($result['description']))
                                            <span class="rs-description">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', isset($result['description']{120})?substr($result['description'],0,120).'<span onclick="showmore(this)" style="color:blue"><span class="hidden">'.substr($result['description'],120).'</span>...more</span>':$result['description'])) !!}</span>
                                        @endif
                                        <p class="result-url">
                                            {{ str_limit(html_entity_decode($result['url']),60) }}
                                            <a href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}" target="_blank" {!! $rel_ex !!}><span class="fa fa-external-link"></span></a>
                                        </p>
                                    </div>
                                </div>
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
        });
        function showmore(is){
            $(is).css('color','inherit');
            $(is).html($(is).find('.hidden').html());
            $(is).parents('.search-content').eq(0).css('height', 'auto');
            $(is).parents('.search-result').eq(0).css('height', 'auto');
            $(is).parents('.search-result').eq(0).css('max-height', 'auto');
        }
    </script>
@endsection