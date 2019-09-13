@if($enable_ads && !empty($ads))
    @foreach($ads as $k => $v)
        @if($k<$ads_count)
			<?php  $sk = $k%3; $searchklass = $sk==0?1:($sk==1?2:3); ?>
			<div class="search-result col-md-12 col-xs-12 col-lg-12 col-sm-12">
				<div class="search-content search-{{ $searchklass }}">
					<div class="search-body">
						<a href="{{ $v['domain'] }}" target="_blank">
							<h3 class="text-primary">{{ $v['title'] }}</h3>
						</a>
						<span class="btn btn-warning  pull-left discount-value" style="margin-right:10px">
					<p> <span class="ad">Ad</span></p>
					</span>
						@if(!empty($v['description']))
                            <span class="rs-description">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', isset($v['description']{180})?substr($v['description'],0,180).'<span onclick="showmore(this)" style="color:blue"><span class="hidden">'.substr($v['description'],180).'</span>...more</span>':$v['description'])) !!}</span>
						@endif
						<p class="result-url">
							{{ $v['domain'] }}
						</p>
					</div>
				</div>
			</div>
        @endif
    @endforeach
@endif

