<div class="col-xs-12 site-footer" style="text-align:center;padding: 15px; background: #fee">
    <div class="container">
        <div class="col-xs-12 con-footer npd-lr">
            <div class="col-xs-12">2018 {{ $_SERVER['HTTP_HOST'] }}. All Rights Reserved</div>
            {{--<div class="col-xs-12 alert-link">--}}
				<a href="{{ url('/contact') }}">Contact us</a> | <a href="{{ url('/term') }}">Term</a> | <a href="{{ url('/policy') }}">Policy</a> | <a href="http://{{ $_SERVER['HTTP_HOST'] }}/" title="{{ $_SERVER['HTTP_HOST'] }}" target="_blank">{{ $_SERVER['HTTP_HOST'] }}</a> | {{ config('domains.' . ASSET_DOMAIN)['emailContact'] }}
            {{--</div>--}}
        </div>
    </div>
</div>