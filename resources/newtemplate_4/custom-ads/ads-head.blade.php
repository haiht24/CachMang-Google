@if($enable_ads && !empty($ads))
    @foreach($ads as $k => $v)
        @if($k<10)
			<?php  $sk = $k%3; $searchklass = $sk==0?1:($sk==1?2:3); ?>
			<div class="search-result">
				<div class="search-content search-{{ $searchklass }}">
					<div class="search-body">
						<a href="{{ $v['domain'] }}" target="_blank" rel="nofollow">
							<h3 class="text-primary" style="margin:auto">
								<span class="btn btn-warning discount-value">
									<span class="ad">Ad</span>
								</span>
								{{ $v['title'] }}
							</h3>
						</a>
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

