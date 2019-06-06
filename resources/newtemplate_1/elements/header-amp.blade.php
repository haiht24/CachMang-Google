<div class="home-box-search head text-center">
        <div class="input-group search-box" style="width: 80%;margin:auto">
            {{--<div class="col-md-3 col-sm-6 npd-lr">
			<a href="{{ url('/') }}">
                    <img src="{{ asset('/images/'.ASSET_DOMAIN.'/logo.png') }}" class="logo">
			</a>
            </div>--}}
            {{--<div class=" col-md-9 col-sm-6 npd-lr">--}}
			@if(ENABLE_SEARCH_BOX)
			  <div id="form" method="get" class="">
				<form name="f" id="frmSearch" autocomplete="off" style="display: inherit" action="{{ url('/query') }}" method="get">
				<div>
				  
				  <input id="q" name="q" autocomplete="off">
				  <button id="btn" type="submit" class=""><span><span>Search</span></span></button>
				  
				<div id="sg" style="position: absolute; text-align: left; display: none;"></div></div></form>
			  </div>

			@endif
            {{--</div>--}}
        </div>
</div>