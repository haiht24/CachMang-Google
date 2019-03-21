<?php
/*
template name in /resources:
1. getsetcoupon
2. searchforany
3. startnewjobs
4. updatecoupons
 */

return [
	'theme' => [
        'localhost:8080' => [
            'enableSearchBox' => 1,
            'template' => 'updatecoupons'
        ],
        'localhost' => [
            'enableSearchBox' => 1,
            'template' => 'getsetcoupon'
        ],
        'getsetcoupon.com' => [
            'enableSearchBox' => 1,
            'template' => 'getsetcoupon'
        ],
        'updatecoupons.com' => [
            'enableSearchBox' => 1,
            'template' => 'updatecoupons'
        ],
    ]
];

?>