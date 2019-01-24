@if(isset($hiddenSearchHeader) && $hiddenSearchHeader === 0)
<div class="home-box-search head">
    <div class="col-xs-12">
        <div class="col-md-8 con-header">
            <div class="col-md-3">
                <a href="{{ url('/') }}">
                <img src="{{ asset('/images/logo.png') }}" class="logo">
                </a>
            </div>
            <div class="input-group search-box head col-md-9">
                <form id="frmSearch" autocomplete="off" style="display: inherit">
                <input type="text" class="form-control input-search" placeholder="" id="q">
                <span class="input-group-btn">
                <button class="btn btn-default border-right-radius" type="submit" id="btnSearch"><i class="fas fa-search"></i></button>
                </span>
                </form>
            </span>
            </div>
        </div>
    </div>
</div>
@endif