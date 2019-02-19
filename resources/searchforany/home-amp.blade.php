@extends('app-amp')
@section('content')
    <div class="col-xs-12 home-box-search">
        <div class="container">
            <div class="col-xs-12 logo home-pos">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('/images/'.ASSET_DOMAIN.'/logo.png') }}" class="logo">
                </a>
            </div>
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
@endsection