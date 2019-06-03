@if(!empty(config('domains.' . ASSET_DOMAIN)['ads']))
    <?php $ads = config('domains.' . ASSET_DOMAIN)['ads'];  ?>
    @foreach($ads as $k => $v)
        @if($k>=3)
            <div class="alert alert-info search-result col-xs-12">
                <div class="col-xs-12 npd-lr">
                    <div class="col-xs-2 npd-lr">
                        <?php
                        preg_match('/\$([0-9]+[\.]*[0-9]*) off|\$([0-9]+[\.]*[0-9]*) Off|\$([0-9]+[\.]*[0-9]*)/', $result['title'], $findDollar);
                        preg_match('/([0-9]+[\.]*[0-9]*)\% Off|([0-9]+[\.]*[0-9]*)\% off|([0-9]+[\.]*[0-9]*)\%/', $result['title'], $findPercent);
                        ?>
                        <button class="btn {{ !empty($findDollar) ? 'btn-warning' : (!empty($findPercent) ? 'btn-primary' : 'btn-default') }}  pull-left discount-value" style="margin-right:10px"><h3>{{ !empty($findDollar) ? strtolower($findDollar[0]) : (!empty($findPercent) ? strtolower($findPercent[0]) : 'CODE') }}</h3></button>
                    </div>
                    <div class="col-xs-10 npd-lr">
                        {{--<span class="label label-success"><em>(1 seconds ago)</em></span>--}}
                        @if(!empty($result['description']))
                            <span class="rs-description">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['description'])) !!}</span>
                        @endif
                        <p class="result-url">
                            {{ str_limit(html_entity_decode($result['domain']),80) }}
                            <sup><a href="{{ strpos($result['domain'],'http') === false ? 'http://'.$result['domain'] : $result['domain'] }}" target="_blank" rel="nofollow"><span class="fa fa-external-link"></span></a></sup>
                        </p>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@endif