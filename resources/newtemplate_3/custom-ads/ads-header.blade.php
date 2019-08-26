@if($enable_ads && !empty($ads))
    @foreach($ads as $k => $result)
        @if($k<$ads_count)
<div class="search-result col-md-6 col-xs-12">
<div class="panel panel-default" style="height:110px;overflow:hidden">
	<div class="panel-body">
	<a href="{{ $link=strpos($result['domain'],'http') === false ? 'http://'.$result['domain'] : $result['domain'] }}" target="_blank">
		<span class="btn btn-warning  pull-left discount-value" style="margin-right:10px;">
		<h3>{{ !empty($findDollar) ? strtolower($findDollar[0]) : (!empty($findPercent) ? strtolower($findPercent[0]) : 'CODE') }}</h3>
		</span>
		<p>
		<b>{{ str_limit(html_entity_decode($result['domain']),80) }}</b>  <span class="fa fa-external-link"></span><br/>
			@if(!empty($result['description']))
				<span class="rs-description">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $result['description'])) !!}</span>
			@endif
		</p>
	</a>
	</div>
</div>
</div>
        @endif
    @endforeach
@endif