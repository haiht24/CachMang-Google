@extends('app_home')
@section('content')
<div class="centered">
    <div class="row">
    <div class="col-lg-3">
        <a class="navbar-brand" href="{{ url('/') }}" style="padding:0"><img src="{{ asset('/images/logo/'. DOMAIN_HOST . '.png') }}" class="logo" alt="{{$_SERVER['HTTP_HOST']}}"/></a>
    </div>
    <div class="col-lg-9">
	@if(!empty($desc_search))
        <h1>{{ $desc_search }}</h1>
	@endif
        <div class="input-group search-box">
            <form id="frmSearch" autocomplete="off" style="display: inherit" action="{{ url('/query') }}" method="get">
                <input type="text" class="form-control input-search" placeholder="" id="q">
                <span class="input-group-btn">
                                    <button class="btn btn-default input-search" type="submit" id="btnSearch">Search</button>
                </span>
            </form>
        </div>
    </div>
    </div>
</div>

    <?php $_keyword = env('KEYWORD') ? '-'.env('KEYWORD'):''; ?>
    <h2>Top Store</h2>
    <div class="row">
        <div>
		@if(!empty($top_keywords))
			<?php $col_number = count($top_keywords); ?>
		@foreach($top_keywords as $keywords)
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 list-group">
                <div class="">
                        @foreach($keywords as $k => $v)
						<?php $item = detect_keywords($v, ' coupon'); ?>
                            ›   <a href='{{ url('/') . '/' .str_slug($item) }}' title='{{ $v }}'>{{ ucwords(str_limit($item, 15)) }}</a><br/>
                        @endforeach
                </div>
            </div>
		@endforeach
		@endif
        </div>
    </div>

    <h2>Trending searches</h2>
    <div class="row">
		@if(!empty($second_keywords))
		@foreach($second_keywords as $keywords)
            <div class="col-lg-3 col-md-3 col-sm-6">
                    @foreach($keywords as $k => $v)
						<?php $item = detect_keywords($v, ' coupon'); ?>
                        <p>
                            <a href="{{ url('/' . str_slug($item)) }}">{{ str_limit(ucwords($item), 25) }} </a>
                        </p>
                    @endforeach
            </div>
		@endforeach
		@endif
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $('.input-search').keypress(function () {
                var keycode = (event.keyCode ? event.keyCode : event.which);
                if(keycode == '13'){
                    var defaultKw = $('#homeInputSearch').text().replace(/\s/g,'-').toLowerCase();
                    var kw = $(this).val();
                    kw = kw.replace(/\s/g,'-').toLowerCase();
                    if(kw.indexOf(defaultKw) === -1){
                        kw = kw + '-' + defaultKw;
                    }
                    location.replace(kw);
                }
            });

            $('.defaultKwHome a').click(function () {
                $('#homeInputSearch').text($(this).text());
            });

            $('.page').click(function (e) {
//                e.prevent('default');
            });
        });
    </script>
@endsection