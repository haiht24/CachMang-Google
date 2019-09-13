<div class="wrap-top-head wrap-search-box">
<div class="" style="width:80%;text-align: center;margin:auto;padding:20px">
	<div class="row">
	<div class="col-md-3 col-sm-12 col-lg-2 col-xs-12" style="z-index: 9999;">	
				<a href="{{ url('/') }}">
						<img src="{{ asset('/images/logo/'. DOMAIN_HOST . '.png') }}" class="logo" alt="logo find coupon"/>
				</a>
	</div>
<div class=" col-md-9 col-sm-12 col-lg-10 col-xs-12">
			@if(ENABLE_SEARCH_BOX)
        <form name="f" id="frmSearch" autocomplete="off" style="display: inherit;margin:auto;width:60%;" action="{{ url('/query') }}" method="get">
            <div class="inner-form" style="margin-bottom: 0">
                    <div class="input-field" style="height: 40px;">
                        <button class="btn-search" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                <input id="q" name="q" autocomplete="off" type="text" placeholder="Keywords" value="" />
                    </div>
            </div>
        </form>
			@endif
</div>
	</div>
</div>
</div>