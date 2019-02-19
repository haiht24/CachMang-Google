@extends('app-amp')
@section('content')
    <div class="col-xs-12">
        <h1 class="home-h1">
            Holidays And Occasions Coupon Code and Promotions Search {{ date("F j, Y") }}
        </h1>
    </div>
    <?php $_keyword = env('KEYWORD') ? '-'.env('KEYWORD'):''; ?>
    <div class="col-xs-12 npd-lr popular-kws">
        <div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="list-group">
                    @foreach($holiday[1] as $k => $v)
                        <a href='{{ url('/') . '/' . str_slug($v) . $_keyword }}' class='list-group-item' title='{{ $v }}'> > {{ $v }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="list-group">
                    @foreach($holiday[2] as $k => $v)
                        <a href='{{ url('/'). '/' . str_slug($v) . $_keyword }}' class='list-group-item' title='{{ $v }}'> > {{ $v }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="list-group">
                    @foreach($holiday[3] as $k => $v)
                        <a href='{{ url('/'). '/'  . str_slug($v) . $_keyword }}' class='list-group-item' title='{{ $v }}'> > {{ $v }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="list-group">
                    @foreach($holiday[4] as $k => $v)
                        <a href='{{ url('/'). '/'  . str_slug($v) . $_keyword }}' class='list-group-item' title='{{ $v }}'> > {{ $v }}</a>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <div class="col-xs-12">
        <h1 class="home-h1-blue">
            Top Trending Search {{ date("F j, Y") }}
        </h1>
        <div class="col-xs-12 top-trending-search">
            <div class="col-lg-3 col-md-3 col-sm-6">
                @foreach($trendingSearch[1] as $k => $v)
                    <?php $v = stripos($v,'coupon') === false ? $v . ' coupon' : $v; ?>
                    <p>
                        <span> > </span> <a href="{{ url('/' . str_slug($v)) }}">{{ substr(ucwords($v), 0, 30) }} {{ strlen($v) > 20 ? '...':'' }}</a>
                    </p>
                @endforeach
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                @foreach($trendingSearch[2] as $k => $v)
                    <?php $v = stripos($v,'coupon') === false ? $v . ' coupon' : $v; ?>
                    <p>
                        <span> > </span> <a href="{{ url('/' . str_slug($v)) }}">{{ substr(ucwords($v), 0, 30) }} {{ strlen($v) > 20 ? '...':'' }}</a>
                    </p>
                @endforeach
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                @foreach($trendingSearch[3] as $k => $v)
                    <?php $v = stripos($v,'coupon') === false ? $v . ' coupon' : $v; ?>
                    <p>
                        <span> > </span> <a href="{{ url('/' . str_slug($v)) }}">{{ substr(ucwords($v), 0, 30) }} {{ strlen($v) > 20 ? '...':'' }}</a>
                    </p>
                @endforeach
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                @foreach($trendingSearch[4] as $k => $v)
                    <?php $v = stripos($v,'coupon') === false ? $v . ' coupon' : $v; ?>
                    <p>
                        <span> > </span> <a href="{{ url('/' . str_slug($v)) }}">{{ substr(ucwords($v), 0, 30) }} {{ strlen($v) > 20 ? '...':'' }}</a>
                    </p>
                @endforeach
            </div>

            {{--<div class="col-xs-12 page-nav">
                <span>
                    <a href="#1" class="page">1</a>
                </span>
                <span>
                    <a href="#2" class="page">2</a>
                </span>
                <span>
                    <a href="#3" class="page">3</a>
                </span>
            </div>--}}

        </div>
    </div>
@endsection