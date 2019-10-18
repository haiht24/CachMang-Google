@if(ENABLE_SEARCH_BOX)
<div class="search-form row" style="text-align:center">
        <form id="frmSearch" autocomplete="off">
            {{--<div class="col-sm-2 col-xs-12 logo-search">
			<a href="{{ url('/') }}">
                    <img src="{{ asset('/images/logo/'. DOMAIN_HOST . '.png') }}" alt="" class="img-logo-search">
			</a>
            </div>--}}
            <div class="col-sm-12 col-md-12 col-search">
                <div class="what-search">
                    <label class="p-what"><a href="{{ url('/') }}">
						<img src="{{ asset('/images/logo/'. DOMAIN_HOST . '.png') }}" class="logo" alt="logo find coupon"/>
					</a></label>
                    <label class="p-what-des">keyworks or company</label>
                    <div class="inp-what-wrapper">
                        <input type="text" class="inp-p-what" id="q"> <button type="submit" class="btn-find-jobs btn-primary" id="btnSearch">SEARCH</button>
                    </div>
                </div>
            </div>{{--
            <div class="col-sm-12 col-md-5 col-search">
                <div class="where-search">
                    <label class="p-where">where</label>
                    <label class="p-where-des">city or province</label>
                    <div class="inp-where-wrapper">
                        <input type="text" class="inp-p-where" value="{{ CITY }}" id="where">
                    </div>
                </div>
            </div>--}}
        </form>
    </div>
@endif