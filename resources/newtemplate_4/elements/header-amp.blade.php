<div class="wrap-top-head wrap-search-box">
	<div class="" style="width:80%;text-align: center;margin:auto;padding:20px">
		@if(1||ENABLE_SEARCH_BOX)
			<form name="f" id="frmSearch" autocomplete="off" style="display: inherit;margin:0" action="{{ url('/query') }}" method="get">
				<div class="inner-form" style="margin-bottom: 0">
					<div class="input-field" style="height: 40px;">
						<button class="btn-search" type="submit">
							<i class="fa fa-search"></i>
						</button>
						<input id="q" name="q" autocomplete="off" type="text" placeholder="Keywords" value="" />
					</div>
				</div>
			</form>
		@endif
	</div>
</div>