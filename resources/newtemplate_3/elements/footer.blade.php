
<div class="footer">
<div class="row site-footer" style="text-align:center">
        <div class="col-xs-12 col-md-12">
            <div class="col-xs-12">2018 {{ ASSET_DOMAIN }}. All Rights Reserved</div>
            {{--<div class="col-xs-12 alert-link">--}}
				<a href="{{ url('/contact') }}">Contact us</a> | <a href="{{ url('/term') }}">Term</a> | <a href="{{ url('/policy') }}">Policy</a> | <a href="http://{{ $_SERVER['HTTP_HOST'] }}/" title="{{ $_SERVER['HTTP_HOST'] }}" target="_blank">{{ $_SERVER['HTTP_HOST'] }}</a> | {{ config('domains.' . ASSET_DOMAIN)['emailContact'] }}
            {{--</div>--}}
        </div>
</div>
</div>