<div class="col-xs-12">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="container-fluid npd-lr container-header col-xs-12">
                {{--Nav bar--}}
                <div class="navbar-header col-sm-6 npd-lr">
                    {{--<a href="{{ url('/') }}">
                            <img src="{{ asset('/images/'.ASSET_DOMAIN.'/logo.png') }}" class="logo">
                    </a>--}}
                </div>
                <ul class="nav navbar-nav col-xs-6 npd-lr">
                </ul>
                {{--Search--}}
                <div class="col-sm-6 npd-lr">
                    <div class="input-group search-input">
                        @if(ENABLE_SEARCH_BOX)
                            <form action="{{ url('/query') }}" autocomplete="off">
                                <ul class="parent-header-search">
                                    <li>
                                        <input type="text" class="form-control" placeholder="Enter to search" id="q"
                                               name="q">
                                    </li>
                                    <li>
                                        <button type="submit" class="btn btn-info" id="btnSearch">
                                            <span class="glyphicon glyphicon-search"></span> Search
                                        </button>
                                    </li>
                                </ul>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>