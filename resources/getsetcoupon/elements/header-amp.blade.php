<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header" style="float: none">
          <a class="navbar-brand" href="{{ url('/') }}">{{ $_SERVER['HTTP_HOST'] }}</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
			
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{ url('/promo-codes/') }}">Promo Codes</a></li>
            <li><a href="{{ url('/coupon-codes/') }}">Coupon Codes</a></li>
            <li><a href="{{ url('/discount-coupons/') }}">Discount Coupons</a></li>
			<li><a href="{{ url('/groupon-coupons/') }}">Groupon Coupons</a></li>
			<li><a href="{{ url('/discount-codes/') }}">Discount Codes</a></li>
			<li><a href="{{ url('/free-shipping/') }}">Free Shipping</a></li>
          </ul>		  
        </div>
          </button>
        </div>
      </div>
    </nav>