@extends('app-amp')
@section('content')
<div class="col-xs-12 home-box-search">
        <div class="container right-13">
		{{--<div class="col-xs-12 logo home-pos">
                <img src="{{ asset('/images/logo.png') }}" class="logo">
		</div>--}}
            <div class="input-group search-box">
                <form id="frmSearch" autocomplete="off" style="display: inherit" action="{{ url('/query') }}" method="get">
                    <input type="text" class="form-control input-search" placeholder="" id="q">
                    <span class="input-group-btn">
                        <button class="btn btn-default input-search-home" type="submit" id="btnSearch"><i class="fas fa-search"></i></button>
                    </span>
                </form>
            </div>
        </div>
    </div>
@endsection