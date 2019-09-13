<div class="form-search width-container">
<div class="row">
<div class="col-md-3 col-sm-12 col-lg-2 col-xs-12" style="z-index: 9999">	
				<a href="{{ url('/') }}">
						<img src="{{ asset('/images/logo/'. DOMAIN_HOST . '.png') }}" class="logo" alt="logo find coupon"/>
				</a>
</div>
@if(ENABLE_SEARCH_BOX)
<div class=" col-md-9 col-sm-12 col-lg-10 col-xs-12">
    <div class="form-search">
        <form class="form-wrapper cf" name="f" id="frmSearch" autocomplete="off" style="display: inherit" action="{{ url('/query') }}" method="get">
            <div class="wrap-search-input">
                <input id="q" name="q" autocomplete="off" type="text" placeholder="Keywords" value="" />
            </div>
            <button type="submit">Search</button>
        </form>
    </div>
</div>
@endif
</div>
</div>