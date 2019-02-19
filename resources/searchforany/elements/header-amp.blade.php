<div class="col-xs-12 home-box-search head">
<div class="container">
        <div class="col-sm-12 con-header">
            <div class="col-md-3 col-sm-6 npd-lr">
			{{--<a href="{{ url('/') }}">
                    <img src="{{ asset('/images/'.ASSET_DOMAIN.'/logo.png') }}" class="logo">
			</a>--}}
            </div>
            <div class="input-group search-box head col-md-9 col-sm-6 npd-lr">
			@if(ENABLE_SEARCH_BOX)
                <form id="frmSearch" autocomplete="off" action="{{ url('/query') }}" method="get">
                    <input type="text" class="form-control input-search" placeholder="" id="q" name="q">
                    <span class="input-group-btn">
                    <button class="btn btn-default input-search" type="submit" id="btnSearch">Search</button>
                    </span>
                </form>
			@endif
            </div>
        </div>
    </div>
</div>