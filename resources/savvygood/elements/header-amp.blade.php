<nav>
    <div class="nav-box">
        <div class="logo">
            <a href="/">
                <img src="{{ asset('/images/'.ASSET_DOMAIN.'/logo.png') }}" alt="">
            </a>
        </div>
        @if(ENABLE_SEARCH_BOX)
            <div class="row home-box-search">
                <div class="input-group search-box">
                    <form id="frmSearch" autocomplete="off" style="display: inherit" action="{{ url('/query') }}"
                          method="get">
                        <input type="text" class="form-control input-search" placeholder="" name="q" id="q">
                        <span class="input-group-btn">
                            <button class="btn btn-default input-search" type="submit" id="btnSearch"><i
                                        class="fa fa-search"></i></button>
							</span>
                    </form>
                </div>
            </div>
        @endif
    </
    </div>
</nav>