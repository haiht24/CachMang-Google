@extends('app-amp')
@section('content')
    <div class="row" style="margin-left:0px;margin-right:0px">
        <div class="s-result col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="wrap-results">
                @include('custom-ads.ads-head')
                @if(count($results) > 0)
                    @foreach($results as $k=>$result)
                        <?php  $sk = $k%3; $searchklass = $sk==0?1:($sk==1?2:3); ?>
                        @if($k === 2 || $k === 6 || $k === 9)
                            <div class="search-result col-md-6 col-xs-12 col-lg-6 col-sm-12">
                                <div class="panel panel-default search-{{ $searchklass }}">
                                    <div class="panel-body">
                                        @include('GA.google-adsense')
                                    </div>
                                </div>
                            </div>
                        @endif
                        <?php
                        preg_match('/\$([0-9]+[\.]*[0-9]*) off|\$([0-9]+[\.]*[0-9]*) Off|\$([0-9]+[\.]*[0-9]*)/', $result['title'], $findDollar);
                        preg_match('/([0-9]+[\.]*[0-9]*)\% Off|([0-9]+[\.]*[0-9]*)\% off|([0-9]+[\.]*[0-9]*)\%/', $result['title'], $findPercent);
                        ?>
                        <div class="search-result col-md-6 col-xs-12 col-lg-6 col-sm-12">
                            <div class="panel panel-default search-{{ $searchklass }}">
                                <div class="panel-body">
                                    <a href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}" target="_blank" rel="nofollow">
                                        <h3 class="text-primary">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}</h3>
                                    </a>
                                    <span class="btn btn-warning  pull-left discount-value" style="margin-right:10px">
									<h3>{{ !empty($findDollar) ? strtolower($findDollar[0]) : (!empty($findPercent) ? strtolower($findPercent[0]) : 'CODE') }}</h3>
									</span>
                                    @if(!empty($result['description']))
                                        <span class="rs-description">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', isset($result['description']{120})?substr($result['description'],0,120).'<span onclick="showmore(this)" style="color:blue"><span class="hidden">'.substr($result['description'],120).'</span>...more</span>':$result['description'])) !!}</span>
                                    @endif
                                    <p class="result-url">
                                        {{ str_limit(html_entity_decode($result['url']),60) }}
                                        <sup><a href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}" target="_blank" rel="nofollow"><span class="fa fa-external-link"></span></a></sup>
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
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding:10px">
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
