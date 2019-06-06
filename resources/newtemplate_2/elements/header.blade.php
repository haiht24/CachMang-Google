<div class="wrap-top-head">
<div >
    <div class="row" style="width:90%;margin:auto">
            <div class="col-md-3 col-sm-12 col-lg-2 col-xs-12" style="padding-top:20px">
				{{--<div class="col-md-2 col-sm-5 col-lg-3">
				<a href="{{ url('/') }}">
						<img src="{{ asset('/images/'.ASSET_DOMAIN.'/logo.png') }}" class="logo">
				</a>
				</div>--}}
				<a class="logo" href="/">{{ $_SERVER['HTTP_HOST'] }}</a>
			</div>
			@if(1||ENABLE_SEARCH_BOX)
				<div class=" col-md-9 col-sm-12 col-lg-10 col-xs-12">
                    <form name="f" id="frmSearch" autocomplete="off" style="display: inherit" action="{{ url('/query') }}" method="get">
					<div id="search-input" style="width:100%">
						<div class="input-group col-md-6 col-md-offset-3">
							<input id="q" name="q" autocomplete="off" type="text" class="search-query form-control" placeholder="Keyword..." />
                    <span class="input-group-btn">
                    <button class="btn btn-search" type="submit">
                       <i class="fa fa-search"></i>
                    </button>
                    </span>
						</div>
					</div>

                    </form>
				</div>
			@endif
    </div>
</div>
</div>