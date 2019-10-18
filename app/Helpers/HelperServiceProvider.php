<?php
function get_timeago( $ptime )
{
    $ptime = explode('.', $ptime)[0];

    $ptime = strtotime($ptime);
    $estimate_time = time() - $ptime;
    if( $estimate_time < 1 ) {
        return 'less than 1 second ago';
    }
    $condition = [
        12 * 30 * 24 * 60 * 60  =>  'year',
        30 * 24 * 60 * 60       =>  'month',
        24 * 60 * 60            =>  'day',
        60 * 60                 =>  'hour',
        60                      =>  'minute',
        1                       =>  'second'
    ];
    foreach( $condition as $secs => $str ) {
        $d = $estimate_time / $secs;
        if( $d >= 1 ) {
            $r = round( $d );
            return 'about ' . $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
        }
    }
}




function get_detect_keywords() {
	return ['coupon','discount','voucher','promo','offer','deal','code','off','sale','free','bonus','%','percent','$','blackfriday','cybermoday','christmas','newyear','laborday','buy2get1','buy1get1','giftcard',' coupons','discounts','vouchers','promos','offers','deals','codes','off','sales','free','bonus','%','percents','$','blackfridays','cybermodays','christmas','newyears','labordays','buy2get1','buy1get1','giftcards'];
}
function have_detect_keywords($kw) {
	$filters = get_detect_keywords();
	$finded = 0;
	foreach($filters as $find) {
		if(stripos($kw, $find)!==false) {
			$finded = 1;break;
		}
	}
	return $finded;
}

function detect_keywords($kw, $add=' coupon') {
	$finded = have_detect_keywords($kw, $add);
	if($finded===0) $kw .= $add;
	return $kw;
}