@extends('app')
@section('content')
    <div class="store">
        <div class="store-content">
            <div class="top-background">
                <h2>{{ !empty($q) ? ucwords($q):'Result page' }}</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="icon">></li>
                    <li>
                        <a href="{{ !empty($q) ? str_ireplace(' ', '-', $q):'#' }}">{{ !empty($q) ? ucwords($q):'' }}</a>
                    </li>
                </ol>
            </div>
            <div class="coupon-area">
                <div class="coupon-col-area">
                    <div class="coupon-c-a-left">
                        <div class="coupon-right-list">
                            <div class="coupon-right-list-top">
                                <div class="coupon-list">
                                    {{--<div class="row-it coupon-item st-cp">
                                        <div class="wrap">
                                            <div class="wrap-box">
                                                <div class="off">
                                                    <a class="store-l get-deal-btn brand-img" href="#">
                                                        <img class="c-c-img"
                                                             src="{{ asset('/images/'.ASSET_DOMAIN.'/6pm.com.png') }}"
                                                             alt="">
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <div class="tl-top">
                                                        <div class="off-box">
                                                            <span>DEAL</span>
                                                        </div>
                                                        <div class="verify-tag">
                                                            <img src="{{ asset('/images/'.ASSET_DOMAIN.'/veri.png') }}"
                                                                 alt="">
                                                            Verified
                                                        </div>
                                                        <div class="use-tag">
                                                            <img src="{{ asset('/images/'.ASSET_DOMAIN.'/used.png') }}"
                                                                 alt="">
                                                            45 People Used
                                                        </div>
                                                    </div>
                                                    <a class="title get-deal-btn" href="#">
                                                        <span>Save Over 70% On Clearance Closet</span>
                                                    </a>
                                                    <a class="content get-deal-btn" href="#">
                                                        <div class="text p-content-text">
                                                            Shop and enjoy amazing discounts at 6pm.com with the
                                                            discounts and rewards. This is shopping as it should be.
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="operate">
                                                <a class="btn t-btn get-deal-btn" href="#">
                                                    <p>Get Deal</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-it coupon-item st-cp">
                                        <div class="wrap">
                                            <div class="wrap-box">
                                                <div class="off">
                                                    <a class="store-l get-deal-btn brand-img" href="#">
                                                        <img class="c-c-img"
                                                             src="{{ asset('/images/'.ASSET_DOMAIN.'/6pm.com.png') }}"
                                                             alt="">
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <div class="tl-top">
                                                        <div class="off-box">
                                                            <span>DEAL</span>
                                                        </div>
                                                        <div class="verify-tag">
                                                            <img src="{{ asset('/images/'.ASSET_DOMAIN.'/veri.png') }}"
                                                                 alt="">
                                                            Verified
                                                        </div>
                                                        <div class="use-tag">
                                                            <img src="{{ asset('/images/'.ASSET_DOMAIN.'/used.png') }}"
                                                                 alt="">
                                                            45 People Used
                                                        </div>
                                                    </div>
                                                    <a class="title get-deal-btn" href="#">
                                                        <span>Save Over 70% On Clearance Closet</span>
                                                    </a>
                                                    <a class="content get-deal-btn" href="#">
                                                        <div class="text p-content-text">
                                                            Shop and enjoy amazing discounts at 6pm.com with the
                                                            discounts and rewards. This is shopping as it should be.
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="operate">
                                                <a class="btn h-btn get-deal-btn" href="#">
                                                    <p>
                                                        <span>Show Code</span>
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-it coupon-item st-cp">
                                        <div class="wrap">
                                            <div class="wrap-box">
                                                <div class="off">
                                                    <a class="store-l get-deal-btn brand-img" href="#">
                                                        <img class="c-c-img"
                                                             src="{{ asset('/images/'.ASSET_DOMAIN.'/6pm.com.png') }}"
                                                             alt="">
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <div class="tl-top">
                                                        <div class="off-box">
                                                            <span>DEAL</span>
                                                        </div>
                                                        <div class="verify-tag">
                                                            <img src="{{ asset('/images/'.ASSET_DOMAIN.'/veri.png') }}"
                                                                 alt="">
                                                            Verified
                                                        </div>
                                                        <div class="use-tag">
                                                            <img src="{{ asset('/images/'.ASSET_DOMAIN.'/used.png') }}"
                                                                 alt="">
                                                            45 People Used
                                                        </div>
                                                    </div>
                                                    <a class="title get-deal-btn" href="#">
                                                        <span>Save Over 70% On Clearance Closet</span>
                                                    </a>
                                                    <a class="content get-deal-btn" href="#">
                                                        <div class="text p-content-text">
                                                            Shop and enjoy amazing discounts at 6pm.com with the
                                                            discounts and rewards. This is shopping as it should be.
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="operate">
                                                <a class="btn t-btn get-deal-btn" href="#">
                                                    <p>Get Deal</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-it coupon-item st-cp">
                                        <div class="wrap">
                                            <div class="wrap-box">
                                                <div class="off">
                                                    <a class="store-l get-deal-btn brand-img" href="#">
                                                        <img class="c-c-img"
                                                             src="{{ asset('/images/'.ASSET_DOMAIN.'/6pm.com.png') }}"
                                                             alt="">
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <div class="tl-top">
                                                        <div class="off-box">
                                                            <span>DEAL</span>
                                                        </div>
                                                        <div class="verify-tag">
                                                            <img src="{{ asset('/images/'.ASSET_DOMAIN.'/veri.png') }}"
                                                                 alt="">
                                                            Verified
                                                        </div>
                                                        <div class="use-tag">
                                                            <img src="{{ asset('/images/'.ASSET_DOMAIN.'/used.png') }}"
                                                                 alt="">
                                                            45 People Used
                                                        </div>
                                                    </div>
                                                    <a class="title get-deal-btn" href="#">
                                                        <span>Save Over 70% On Clearance Closet</span>
                                                    </a>
                                                    <a class="content get-deal-btn" href="#">
                                                        <div class="text p-content-text">
                                                            Shop and enjoy amazing discounts at 6pm.com with the
                                                            discounts and rewards. This is shopping as it should be.
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="operate">
                                                <a class="btn h-btn get-deal-btn" href="#">
                                                    <p>
                                                        <span>Show Code</span>
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>--}}
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
                                                <div class="row-it coupon-item st-cp">
                                                    <div class="wrap">
                                                        <div class="wrap-box">
                                                            <div class="off">
                                                                <a class="store-l get-deal-btn brand-img" href="#">
                                                                    <img class="c-c-img"
                                                                         src="{{ asset('/images/'.ASSET_DOMAIN.'/6pm.com.png') }}"
                                                                         alt="">
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <div class="tl-top">
                                                                    <div class="off-box">
                                                                        <span>{{ !empty($findDollar) ? strtolower($findDollar[0]) : (!empty($findPercent) ? strtolower($findPercent[0]) : 'CODE') }}</span>
                                                                    </div>
                                                                    <div class="verify-tag">
                                                                        <img src="{{ asset('/images/'.ASSET_DOMAIN.'/veri.png') }}"
                                                                             alt="">
                                                                        Verified
                                                                    </div>
                                                                    <div class="use-tag">
                                                                        <img src="{{ asset('/images/'.ASSET_DOMAIN.'/used.png') }}"
                                                                             alt="">
                                                                        45 People Used
                                                                    </div>
                                                                </div>
                                                                @if(empty($result['type']) || $result['type'] !== 'fake')
                                                                    <a class="title get-deal-btn"
                                                                       href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}"
                                                                       target="_blank" {!! $rel_ex !!}>
                                                                        <span>{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}</span>
                                                                    </a>
                                                                @else
                                                                    <span>
                                                                        {!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}
                                                                    </span>
                                                                @endif
                                                                    @if(!empty($result['description']))
                                                                        <a class="content get-deal-btn" href="#">
                                                                            <div class="text p-content-text">
                                                                                {!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', isset($result['description']{160})?substr($result['description'],0,160).'<span onclick="showmore(this)" style="color:lightblue"><span class="hidden">'.substr($result['description'],160).'</span>...more</span>':$result['description'])) !!}
                                                                            </div>
                                                                        </a>
                                                                    @endif
                                                            </div>
                                                        </div>
                                                        <div class="operate">
                                                            <a class="btn t-btn get-deal-btn" href="#">
                                                                <p>Get Deal</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coupon-c-a-right">
                        <div class="coupon-top">
                            <div class="brand-poster">
                                <a href="#">
                                    <img class="brand-poster-img"
                                         src="{{ asset('/images/'.ASSET_DOMAIN.'/6pm.com.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="coupon-filter">
                            <div class="about-section result-collect">
                                <p class="xx_coupons">{{ !empty($q) ? ucwords($q):'Result page' }} Coupons</p>
                                <table border="0" cellpadding="0" cellspacing="0" class="about-merchant-stats rc-table">
                                    <tbody>
                                    <tr>
                                        <td>Total Offers</td>
                                        <td class="cp-r">455</td>
                                    </tr>
                                    <tr>
                                        <td>Coupon Codes</td>
                                        <td class="cp-r">32</td>
                                    </tr>
                                    <tr>
                                        <td>Online Sales</td>
                                        <td class="cp-r">423</td>
                                    </tr>
                                    <tr>
                                        <td>Best Discount</td>
                                        <td class="cp-r">90% OFF</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="filters">
                                <div class="filter">
                                    <p class="filter-name">Coupon Type</p>
                                    <div class="l">
                                        <a class="filter-item" href="#">
                                            <span class="check"></span>
                                            <div>Coupon Code(32)</div>
                                        </a>
                                        <a class="filter-item" href="#">
                                            <span class="check"></span>
                                            <div>Online Sales (423)</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="filter">
                                    <p class="filter-name">Discount Type</p>
                                    <div class="l">
                                        <a class="filter-item" href="#">
                                            <span class="check"></span>
                                            <div>% Off (300)</div>
                                        </a>
                                        <a class="filter-item" href="#">
                                            <span class="check"></span>
                                            <div>$ Off (0)</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="index-pop">
                <div class="m-w">
                    <h3>
                        Popular Discount Codes
                    </h3>
                    <div class="table">
                        <div class="title">
                            <p class="t-time">Date</p>
                            <p class="t-cd">Code Description</p>
                            <p class="t-code">Code</p>
                        </div>
                        <ul>
                            <li class="t-time">
                                <p class="lc-c">03/09/2019</p>
                                <p class="lc-c">03/09/2019</p>
                                <p class="lc-c">03/09/2019</p>
                                <p class="lc-c">03/09/2019</p>
                                <p class="lc-c">03/09/2019</p>
                                <p class="lc-c">03/09/2019</p>
                                <p class="lc-c">03/09/2019</p>
                                <p class="lc-c">03/09/2019</p>
                            </li>
                            <li class="t-cd">
                                <p class="cd-c">Get Free Delivery On Orders Over $50</p>
                                <p class="cd-c">Enjoy Up To 90% Off Clearance</p>
                                <p class="cd-c">Enjoy Up To 60% Off Puma Styles</p>
                                <p class="cd-c">Enjoy Up To 65% Off Vera Bradley Women</p>
                                <p class="cd-c">Enjoy 74% Off COACH BF Wild Plaid Mini City Zip Tote</p>
                                <p class="cd-c">Enjoy Up To 70% Off New Balance</p>
                                <p class="cd-c">Save Over 70% On Clearance Closet</p>
                                <p class="cd-c">New Spring Event Items</p>
                            </li>
                            <li class="t-code">
                                <p class="code-c">
                                    Not needed
                                </p>
                                <p class="code-c">
                                    Not needed
                                </p>
                                <p class="code-c">
                                    Not needed
                                </p>
                                <p class="code-c">
                                    Not needed
                                </p>
                                <p class="code-c">
                                    Not needed
                                </p>
                                <p class="code-c">
                                    Not needed
                                </p>
                                <p class="code-c">
                                    Not needed
                                </p>
                                <p class="code-c">
                                    Not needed
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection