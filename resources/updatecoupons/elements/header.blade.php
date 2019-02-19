<div class="col-xs-12">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="container-fluid npd-lr container-header col-xs-12">
                {{--Nav bar--}}
                <div class="navbar-header col-sm-6 npd-lr">
				{{--<a href="{{ url('/') }}">
                        <img src="{{ asset('/images/'.ASSET_DOMAIN.'/logo.png') }}" class="logo">
				</a>--}}
                </div>
                <ul class="nav navbar-nav col-xs-6 npd-lr">
                    {{--<li><a href="{{ url('/promo-codes') }}">Promo codes</a></li>
                    <li><a href="{{ url('/coupon-codes') }}">Coupon codes</a></li>
                    <li><a href="{{ url('/discount-codes') }}">Discount coupons</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/free-shipping') }}">Free shipping</a></li>
                            <li><a href="{{ url('bitcoin-coupon') }}">Bitcoin</a></li>
                        </ul>
                    </li>--}}
                </ul>
                {{--Search--}}
                <div class="col-sm-6 npd-lr">
                    <div class="input-group search-input">
					@if(IS_SEARCH)
                        <form id="frmSearch" autocomplete="off">
                            <ul class="parent-header-search">
                                <li>
                                    <input type="text" class="form-control" placeholder="Enter to search" id="q">
                                </li>
                                <li>
                                    <button type="submit" class="btn btn-info" id="btnSearch">
                                        <span class="glyphicon glyphicon-search"></span> Search
                                    </button>
                                </li>
                            </ul>
                        </form>
					@endif
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>