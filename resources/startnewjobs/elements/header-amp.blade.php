@if(ENABLE_SEARCH_BOX)
<div class="search-form col-xs-12">
        <form id="frmSearch" autocomplete="off" action="{{ url('/query') }}">
            {{--<div class="col-sm-2 col-xs-12 logo-search">
			<a href="{{ url('/') }}">
                    <img src="{{ asset('/images/'.ASSET_DOMAIN.'/logo.png') }}" alt="" class="img-logo-search">
			</a>
            </div>--}}
            <div class="col-sm-4 col-xs-12 col-search">
                <div class="what-search">
                    <label class="p-what">what</label>
                    <label class="p-what-des">jobs title, keyworks or company</label>
                    <div class="inp-what-wrapper">
                        <input type="text" class="inp-p-what" id="q" name="q">
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 col-search">
                <div class="where-search">
                    <label class="p-where">where</label>
                    <label class="p-where-des">city or province</label> 
					<div class="inp-where-wrapper">
                        <input type="text" class="inp-p-where" value="{{ CITY }}" id="where">
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-xs-12 find-jobs-button">
                <button type="submit" class="btn-find-jobs" id="btnSearch">Find Jobs</button>
            </div>
        </form>
    </div>
@endif