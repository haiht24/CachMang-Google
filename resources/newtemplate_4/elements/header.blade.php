@if(1||ENABLE_SEARCH_BOX)
    <div class="form-search width-container">
        <form class="form-wrapper cf" name="f" id="frmSearch" autocomplete="off" style="display: inherit" action="{{ url('/query') }}" method="get">
            <div class="wrap-search-input">
                <input id="q" name="q" autocomplete="off" type="text" placeholder="Keywords" value="" />
            </div>
            <button type="submit">Search</button>
        </form>
    </div>
@endif