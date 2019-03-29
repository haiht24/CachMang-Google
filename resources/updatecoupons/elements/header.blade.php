<div class="row navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid container-header col-md-12 col-xs-10 col-sm-10" style="margin:auto;">
        @if(ENABLE_SEARCH_BOX)
            <form class="input-group search-input" id="frmSearch" autocomplete="off">
                <div class="parent-header-search" style="width:60%;margin:auto;">
                    <input type="text" class="form-control" placeholder="Enter to search" id="q">
                    <button type="submit" class="btn btn-info" id="btnSearch">
                        <span class="glyphicon glyphicon-search"></span> Search
                    </button>
                </div>
            </form>
        @endif
    </div>
</div>
