@if($enable_ads && !empty($ads))
    @foreach($ads as $k => $result)
        @if($k<$ads_count)
<div class="search-result col-md-12 col-xs-12">
<div class="panel panel-default" style="overflow:hidden">
	<div class="panel-body">
		<span class="btn btn-warning  pull-left discount-value" style="margin-right:10px;">
	
	<p>{{ !empty($findDollar) ? strtolower($findDollar[0]) : (!empty($findPercent) ? strtolower($findPercent[0]) : 'CODE') }}</p>
		</span>
		<strong><a href="{{ $link=strpos($result['domain'],'http') === false ? 'http://'.$result['domain'] : $result['domain'] }}" target="_blank">{{ str_limit(html_entity_decode($result['title']),80) }}</a></strong>  <span class="fa fa-external-link"></span>
		<div class="result-url" style="padding-top:3px">
			{{ $result['domain'] }}
		</div>
		<p>
			@if(!empty($result['description']))
				<span class="rs-description">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', isset($result['description']{160})?substr($result['description'],0,160).'<span onclick="showmore(this)" style="color:blue"><span class="hidden">'.substr($result['description'],160).'</span>...more</span>':$result['description'])) !!}</span>
			@endif
		</p>
	</div>
</div>
</div>
        @endif
    @endforeach
@endif