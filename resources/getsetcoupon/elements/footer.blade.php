<footer class="footer">
    <div class="col-xs-12 footer alert-info container">
        <div class="col-xs-12 con-footer">
            <div class="col-xs-12">
                2018 {{ ASSET_DOMAIN }}. All Rights Reserved
            </div>
            <div class="col-xs-12 alert-link">
                <a href="{{ url('/contact') }}">Contact us</a> | <a href="{{ url('/term') }}">Term</a> | <a href="{{ url('/policy') }}">Policy</a> | <a href="http://{{ $_SERVER['HTTP_HOST'] }}/" title="{{ $_SERVER['HTTP_HOST'] }}" target="_blank">{{ $_SERVER['HTTP_HOST'] }}</a> | contact{{ '@'.$_SERVER['HTTP_HOST'] }}
            </div>
        </div>
    </div>
</footer>