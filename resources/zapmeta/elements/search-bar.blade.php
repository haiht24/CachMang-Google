@if(ENABLE_SEARCH_BOX)
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
@endif