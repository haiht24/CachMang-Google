@if($enable_ads && !empty($ads))
    @foreach($ads as $k => $result)
        @if($k<$ads_count)
<div class="search-result col-md-6 col-xs-12">
<div class="panel panel-default" style="height:110px;overflow:hidden">
	<div class="panel-body">
		<span class="btn btn-warning  pull-left discount-value" style="margin-right:10px;">
		<h3>{{ !empty($findDollar) ? strtolower($findDollar[0]) : (!empty($findPercent) ? strtolower($findPercent[0]) : 'CODE') }}</h3>
		</span>
		<strong><a href="{{ $link=strpos($result['domain'],'http') === false ? 'http://'.$result['domain'] : $result['domain'] }}" target="_blank">{{ str_limit(html_entity_decode($result['title']),80) }}</a></strong>  <span class="fa fa-external-link"></span><br/>
		<p>
			@if(!empty($result['description']))
				<span class="rs-description">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $result['description'])) !!}</span>
			@endif
		</p>
		<p class="result-url">
			{{ $result['domain'] }}
		</p>
	</div>
</div>
</div>
        @endif
    @endforeach
@endif