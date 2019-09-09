@extends('app-amp')
@section('content')
    <div class="main-wrapper">
        <div class="main-wrapper-content">
            <h3>{{ !empty($q) ? ucwords($q):'Result page' }}</h3>
            <div class="container-wrap">
                <div class="row">
                    <h1>{{ !empty($q) ? ucwords($q):'Result page' }}</h1>
                    <div class="coupon-area">
                        @if(count($results) > 0)
                            <?php $from = 'DB'; ?>
                            @if($from === 'DB')
                                @foreach($results as $k=>$result)
                                    @if($k === 2 || $k === 6 || $k ===9)
                                        <div class="row-it coupon-item st-cp">
                                            @include('Google.adsense')
                                        </div>
                                    @endif
                                    <?php
                                    preg_match('/\$([0-9]+[\.]*[0-9]*) off|\$([0-9]+[\.]*[0-9]*) Off|\$([0-9]+[\.]*[0-9]*)/', $result['title'], $findDollar);
                                    preg_match('/([0-9]+[\.]*[0-9]*)\% Off|([0-9]+[\.]*[0-9]*)\% off|([0-9]+[\.]*[0-9]*)\%/', $result['title'], $findPercent);
                                    ?>
                                    <div class="coupon-box">
                                        <div class="type-box">
                                            <div class="type-box-wrapper">
                                                <div class="content">
                                                    <span>{{ !empty($findDollar) ? strtolower($findDollar[0]) : (!empty($findPercent) ? strtolower($findPercent[0]) : 'CODE') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-section">
                                            <div class="middle-content">
                                                <div class="top">
                                                    <img src="{{ asset('/images/'.ASSET_DOMAIN.'/verified.png') }}"
                                                         alt="">
                                                    <span>Verified</span>
                                                </div>
                                                @if(empty($result['type']) || $result['type'] !== 'fake')
                                                    <div class="link-middle">
                                                        <a class="title get-deal-btn"
                                                           href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}"
                                                           target="_blank" {!! $rel_ex !!}>
                                                            <span>{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}</span>
                                                        </a>
                                                    </div>
                                                @else
                                                    <div class="link-middle">
                                                        <a href="#">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}</a>
                                                    </div>
                                                @endif
                                                @if(!empty($result['description']))
                                                    <div class="description-bottom">
                                                        <span>{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', isset($result['description']{160})?substr($result['description'],0,160).'<span onclick="showmore(this)" style="color:lightblue"><span class="hidden">'.substr($result['description'],160).'</span>...more</span>':$result['description'])) !!}</span>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="button-get-deal">
                                                <a href="#">Get Deal</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        @endif
                        {{--<div class="coupon-box">
                            <div class="type-box">
                                <div class="type-box-wrapper">
                                    <div class="content">
                                        <span>Deal</span>
                                    </div>
                                </div>
                            </div>
                            <div class="right-section">
                                <div class="middle-content">
                                    <div class="top">
                                        <img src={{ asset('/images/'.ASSET_DOMAIN.'/verified.png') }}" alt="">
                                        <span>Verified</span>
                                        <span class="span-used">32 People Used</span>
                                    </div>
                                    <div class="link-middle">
                                        <a href="#">Great Saving Ending Soon</a>
                                    </div>
                                    <div class="description-bottom">
                                        <span>Enjoy incredible discounts from gymshark.com on all your favorite items. Thank you for being our loyal fans.</span>
                                    </div>
                                </div>
                                <div class="button-show-deal">
                                    <a href="#">
                                        <p>AFBUSMH20</p>
                                        <span>Show Code</span>
                                    </a>
                                </div>
                            </div>
                        </div>--}}
                        <div class="store-description-box">
                            <div class="title">
                                <span>About {{ !empty($q) ? ucwords($q):'Result page' }}:</span>
                            </div>
                            <div class="description">
                            <span>Gymshark is a fitness apparel & accessories brand, manufacturer and online retailer based in the United Kingdom, supported by over 5.2 million highly engaged social media followers and customers in 131 countries.

Created in 2012 by teenager Ben Francis and a group of his high-school friends. Gymshark has grown from a screen printing operation in a garage, into one of the fastest growing and most recognisable brands in fitness. This growth comes from a devotion to producing innovative, effective performance wear and an ever-expanding social presence, and above all a commitment to the Gymshark vision:

Before there is an action, there is an idea.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection