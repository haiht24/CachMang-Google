<div class="device-c">
    @if(ENABLE_SEARCH_BOX)
        <nav class="navbar">
            <div class="navbar-search navbar-search-logo">
                <div class="navbar-brand">
                    <a href="/" class="navbar-logo">
                        <img src="{{ asset('/images/'.ASSET_DOMAIN.'/zapmeta_logo_25.png') }}" alt="" title="">
                    </a>
                </div>
                <div class="container container-search">
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-md-offset-1 col-lg-7 col-lg-offset-1 navbar-content">
                            <div class="navbar-form">
                                <form action="{{ url('/query') }}" method="get">
                                    <div class="navbar-form-options">
                                        <button class="btn btn-default btn-search" type="submit">Tìm kiếm</button>
                                    </div>
                                    <div class="navbar-form-control">
                                        <input type="text" class="form-control form-control-clear" name="q"
                                               id="id_search_query" value="{{ $q }}">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    @endif
</div>