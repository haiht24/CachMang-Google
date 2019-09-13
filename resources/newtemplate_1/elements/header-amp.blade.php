<div class="home-box-search head text-center">
	<div class="container">
		<div class="row search-box" style="width: 100%;margin:0;margin-top: 10px;">
			<div class="col-md-3 col-sm-5 col-lg-2" style="padding:10px">
				{{--<div class="col-md-2 col-sm-5 col-lg-3">
				<a href="{{ url('/') }}">
						<img src="{{ asset('/images/logo/'. DOMAIN_HOST . '.png') }}" class="logo" alt="logo find coupon"/>
				</a>
				</div>--}}
				<a class="logo" href="/">{{ $_SERVER['HTTP_HOST'] }}</a>
			</div>
			@if(1||ENABLE_SEARCH_BOX)
				<div class="col-md-9 col-sm-7 col-lg-10">
					<div id="form" method="get" class="">
						<form name="f" id="frmSearch" autocomplete="off" style="display: inherit" action="{{ url('/query') }}" method="get">
							<div class="input-group">
								<input id="q" name="q" autocomplete="off" class="form-control" style="border:1px solid #cdc">
								<div class="input-group-btn">
									<button class="btn btn-danger"" type="submit">
									<i class="glyphicon glyphicon-search"></i>
									</button>
								</div>

							</div>
						</form>
					</div>
				</div>
			@endif
		</div>
	</div>
</div>