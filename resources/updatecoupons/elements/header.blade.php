<div class="row navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid container-header col-md-12 col-xs-10 col-sm-10" style="margin:auto;">
	
<div class="col-md-3 col-sm-12 col-lg-2 col-xs-12" style="z-index: 9999">		
		<a href="{{ url('/') }}">
				<img src="{{ asset('/images/logo/'. DOMAIN_HOST . '.png') }}" class="logo" alt="logo find coupon"/>
		</a>

</div>
<div class=" col-md-9 col-sm-12 col-lg-10 col-xs-12">	
        @if(ENABLE_SEARCH_BOX)
            <form class="input-group search-input" id="frmSearch" autocomplete="off">
                <div class="parent-header-search" style="width:60%;margin:auto;">
				<div style="position:relative">
                    <input type="text" class="form-control" placeholder="Enter to search" id="q">
				</div>
                    <button type="submit" class="btn btn-info" id="btnSearch">
                        <span class="glyphicon glyphicon-search"></span> Search
                    </button>
                </div>
            </form>
        @endif
</div>
    </div>
</div>
