<?php
/*
template name in /resources:
1. getsetcoupon //site box
2. searchforany //site search
3. startnewjobs //site search
4. updatecoupons //site box
5. newtemplate_1 //site search
6. newtemplate_2 //site box - sidebar
7. newtemplate_3 //site box - sidebar
8. newtemplate_4 //site box - sidebar

'apiConfig' => [
            'ip' => '',
            'from' => 'google.com,bing.com,yahoo.com,duckduckgo.com'
        ],
api-01(default):    206.189.41.95
api-02:             165.22.255.199
 */
$api_02 = '165.22.255.199';
$public_ads = [
				[
					'domain' => 'https://couponlx.com/',
					'title' => '[store_name] coupons',
					'description' => 'CouponLx is one-stop service where you can grasp up to 80% OFF discounts, voucher code and coupon code for anything you want to purchase online.'
				],
				[
					'domain' => 'https://www.couponpublish.com/',
					'title' => '[store_name] discount',
					'description' => 'You&rsquo;ve found out a reliable place to enjoy all verified coupon and discount codes. Spend less and save more by applying coupon code at checkout.'
				],
				[
					'domain' => 'https://couponmedical.com/',
					'title' => '[store_name] promo codes',
					'description' => 'Must-stop destination for online shopping. Let’s join this coupon marathon to win coupons and voucher codes, saving your budget.'
				],
				[
					'domain' => 'https://couponou.com/',
					'title' => '[store_name] voucher codes',
					'description' => 'This marvellous space is for adventurous shoppers who seek for valid coupon codes and discounts as final treasure.'
				],
			];
			
			
return [
    'localhost' => [
        'enableSearchBox' => 1,
        'template' => 'newtemplate_1',
        'apiConfig' => [
            'ip' => '',
            'from' => 'google.com,bing.com,yahoo.com,duckduckgo.com'
        ]
    ],
    'localhost:8080' => [
        'enableSearchBox' => 1,
        'template' => 'newtemplate_4',
        'google-adsense' => [
            'data-ad-client' => 'ca-pub-0350851762030337',
            'data-ad-slot' => '2320133743'
        ],
        'google-analytic' => 'UA-141818063-1',
        
    ],
    '127.0.0.1:8000' => [
        'enableSearchBox' => 1,
        'template' => 'newtemplate_4',
        'google-adsense' => [
            'data-ad-client' => 'ca-pub-0350851762030337',
            'data-ad-slot' => '2320133743'
        ],
        'google-analytic' => 'UA-141818063-1',
        
    ],
    'beginfinder.com' => [
        'enableSearchBox' => 1,
        'template' => 'updatecoupons',
        'apiConfig' => [
            'ip' => $api_02,
            'from' => 'google.com,bing.com,yahoo.com,duckduckgo.com'
        ],
        'google-adsense' => [
            'data-ad-client' => 'ca-pub-0350851762030337',
            'data-ad-slot' => '5023529804'
        ],
        'google-analytic' => 'UA-141818063-1',
        
    ],
    'getsetcoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'getsetcoupon'
    ],
    'updatecoupons.com' => [
        'enableSearchBox' => 1,
        'template' => 'updatecoupons'
    ],
    'couponfilms.com' => [
        'enableSearchBox' => 1,
        'template' => 'getsetcoupon',
        'google-analytic' => 'UA-144569838-5',
    ],
    'ascoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'getsetcoupon'
    ],
    'mancoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'updatecoupons',
        'google-analytic' => 'UA-144569838-26',
    ],
    'avcoupon.com' => [
        'enableSearchBox' => 0,
        'template' => 'getsetcoupon',
        'apiConfig' => [
            'ip' => $api_02,
            'from' => 'google.com,bing.com,yahoo.com,duckduckgo.com'
        ],
        'google-analytic' => 'UA-144569838-1',
        
    ],
    'capitalcoupon.com' => [
        'enableSearchBox' => 0,
        'template' => 'getsetcoupon',
        'apiConfig' => [
            'ip' => $api_02,
            'from' => 'google.com,bing.com,yahoo.com,duckduckgo.com'
        ],
        'google-analytic' => 'UA-144569838-2',
        
    ],
    'coupondevelopment.com' => [
        'enableSearchBox' => 0,
        'template' => 'updatecoupons',
        'google-analytic' => 'UA-144569838-8',
        'apiConfig' => [
            'ip' => $api_02,
            'from' => 'google.com,bing.com,yahoo.com,duckduckgo.com'
        ],
        
    ],
    'couponent.com' => [
        'enableSearchBox' => 0,
        'template' => 'updatecoupons',
        'google-analytic' => 'UA-144569838-9',
        'apiConfig' => [
            'ip' => $api_02,
            'from' => 'google.com,bing.com,yahoo.com,duckduckgo.com'
        ],
        
    ],
    'couponou.com' => [
        'enableSearchBox' => 1,
        'template' => 'getsetcoupon',
        'apiConfig' => [
            'ip' => $api_02,
            'from' => 'google.com,bing.com,yahoo.com,duckduckgo.com'
        ],
        'google-analytic' => 'UA-144569838-4',
        
    ],
    'couponloans.com' => [
        'enableSearchBox' => 0,
        'template' => 'getsetcoupon',
        'apiConfig' => [
            'ip' => $api_02,
            'from' => 'google.com,bing.com,yahoo.com,duckduckgo.com'
        ],
        'google-analytic' => 'UA-144569838-3',
        
    ],
    'couponmedical.com' => [
        'enableSearchBox' => 1,
        'template' => 'updatecoupons',
        'google-analytic' => 'UA-144569838-10',
        
    ],
    'couponnt.com' => [
        'enableSearchBox' => 1,
        'template' => 'updatecoupons',
        'google-analytic' => 'UA-144569838-11',
        
    ],
    'couponproductions.com' => [
        'enableSearchBox' => 1,
        'template' => 'searchforany',
        'google-analytic' => 'UA-144569838-6',
    ],
    'couponrecords.com' => [
        'enableSearchBox' => 0,
        'template' => 'updatecoupons',
        'google-analytic' => 'UA-144569838-12',
        
    ],
    'couponte.com' => [
        'enableSearchBox' => 1,
        'template' => 'newtemplate_1',
        'google-analytic' => 'UA-144569838-13',
		'ads' => $public_ads,
    ],
    'couponvideos.com' => [
        'enableSearchBox' => 1,
        'template' => 'getsetcoupon',
        'google-analytic' => 'UA-144569838-14',
		'ads' => $public_ads,
		
    ],
    'couponwine.com' => [
        'enableSearchBox' => 1,
        'template' => 'newtemplate_2',
        'google-analytic' => 'UA-144569838-15',
		'ads' => $public_ads,
    ],
    'couponyoga.com' => [
        'enableSearchBox' => 1,
        'template' => 'newtemplate_4',
        'google-analytic' => 'UA-144569838-16',
		'ads' => $public_ads,
    ],
    'ducoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'getsetcoupon',
        'google-analytic' => 'UA-144569838-18',
		'enable_ads' => 0,
		
    ],
    'edcoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'searchforany',
        'google-analytic' => 'UA-144569838-19',
		'enable_ads' => 0,
    ],
    'ficoupon.com' => [
        'enableSearchBox' => 0,
        'template' => 'updatecoupons',
        'google-analytic' => 'UA-144569838-7',
        
    ],
	
	'dancoupon.com' => [
        'enableSearchBox' => 1,
		'enable_ads' => 0,
        'template' => 'searchforany',
        'apiConfig' => [
            'ip' => $api_02,
            'from' => 'google.com,bing.com,yahoo.com,duckduckgo.com'
        ],
        'google-adsense' => [
            'data-ad-client' => '',
            'data-ad-slot' => ''
        ],
        'google-analytic' => 'UA-144569838-17',
        
    ],
    'focoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'updatecoupons',
        'google-analytic' => 'UA-144569838-20',
		'enable_ads' => 0,
    ],
    'hacoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'getsetcoupon',
        'google-analytic' => 'UA-144569838-21',
		'enable_ads' => 0,
    ],
    'hecoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'searchforany',
        'google-analytic' => 'UA-144569838-22',
		'enable_ads' => 0,
    ],
    'iscoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'startnewjobs',
        'google-analytic' => 'UA-144569838-24',
    ],
    'imagecoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'updatecoupons',
        'google-analytic' => 'UA-144569838-23',
    ],
    'kacoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'getsetcoupon',
        'google-analytic' => 'UA-144569838-25',
    ],
    'mindcoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'searchforany',
        'google-analytic' => 'UA-144569838-27',
    ],
    'mocoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'startnewjobs',
        'google-analytic' => 'UA-144569838-28',
    ],
    'nacoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'updatecoupons',
        'google-analytic' => 'UA-144569838-29',
    ],
    'pecoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'getsetcoupon',
        'google-analytic' => 'UA-144569838-30',
    ],
    'pucoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'searchforany',
        'google-analytic' => 'UA-144569838-31',
    ],
    'rucoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'startnewjobs',
        'google-analytic' => 'UA-144569838-32',
    ],
    'samcoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'updatecoupons',
        'google-analytic' => 'UA-144569838-33',
    ],
    'sccoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'getsetcoupon',
        'google-analytic' => 'UA-144569838-34',
    ],
    'secoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'searchforany',
        'google-analytic' => 'UA-144569838-35',
    ],
    'spcoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'startnewjobs',
        'google-analytic' => 'UA-144569838-36',
    ],
    'tacoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'updatecoupons',
        'google-analytic' => 'UA-144569838-37',
    ],
    'ticoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'getsetcoupon',
        'google-analytic' => 'UA-144569838-38',
    ],
    'woodcoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'searchforany',
        'google-analytic' => 'UA-144569838-39',
    ],
    'workcoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'startnewjobs',
        'google-analytic' => 'UA-144569838-40',
    ],
    'couponpictures.com' => [
        'enableSearchBox' => 1,
        'template' => 'getsetcoupon',
        'google-analytic' => 'UA-144569838-41',
    ],
    'racoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'getsetcoupon',
        'google-analytic' => 'UA-144569838-42',
    ],
    'apcoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'searchforany',
        'google-analytic' => 'UA-144569838-43',
    ],
    'couponrealestate.com' => [
        'enableSearchBox' => 1,
        'template' => 'searchforany',
        'google-analytic' => 'UA-144569838-44',
    ],
    'rocoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'searchforany',
        'google-analytic' => 'UA-144569838-45',
    ],
    'couponconsulting.com' => [
        'enableSearchBox' => 1,
        'template' => 'startnewjobs',
        'google-analytic' => 'UA-144569838-46',
    ],
    'couponrealty.com' => [
        'enableSearchBox' => 1,
        'template' => 'startnewjobs',
        'google-analytic' => 'UA-144569838-47',
    ],
    'thcoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'startnewjobs',
        'google-analytic' => 'UA-144569838-48',
    ],
    'couponphotos.com' => [
        'enableSearchBox' => 1,
        'template' => 'updatecoupons',
        'google-analytic' => 'UA-144569838-49',
    ],
    'searchforany.com' => [
        'enableSearchBox' => 1,
        'template' => 'searchforany',
        'apiConfig' => [
            'ip' => $api_02,
            'from' => 'google.com,bing.com,yahoo.com,duckduckgo.com'
        ],
        'google-adsense' => [
            'data-ad-client' => '',
            'data-ad-slot' => ''
        ],
        'google-analytic' => 'UA-144569838-50',
        
    ],
    'startnewjobs.com' => [
        'enableSearchBox' => 1,
        'template' => 'startnewjobs',
        'apiConfig' => [
            'ip' => $api_02,
            'from' => 'google.com,bing.com,yahoo.com,duckduckgo.com'
        ],
        'google-adsense' => [
            'data-ad-client' => '',
            'data-ad-slot' => ''
        ],
        'google-analytic' => '',
        
    ],
	'offersvoucher.com' => [
        'enableSearchBox' => 1,
        'template' => 'getsetcoupon',
		'enable_ads' => 0,
        'apiConfig' => [
            'ip' => $api_02,
            'from' => 'google.com,bing.com,yahoo.com,duckduckgo.com'
        ],
	],
	'macysfree.com' => [
        'enableSearchBox' => 1,
        'template' => 'newtemplate_2',
		'enable_ads' => 0,
		'disable_cat_home' => 1,
        'apiConfig' => [
            'ip' => $api_02,
            'from' => 'google.com,bing.com,yahoo.com,duckduckgo.com'
        ],
	],
	'thekohlscoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'newtemplate_2',
		'enable_ads' => 0,
		'disable_cat_home' => 1,
        'apiConfig' => [
            'ip' => $api_02,
            'from' => 'google.com,bing.com,yahoo.com,duckduckgo.com'
        ],
	],
	'thecouponholiday.com' => [
        'enableSearchBox' => 1,
        'template' => 'searchforany',
		'enable_ads' => 0,
		'disable_cat_home' => 1,
        'apiConfig' => [
            'ip' => $api_02,
            'from' => 'google.com,bing.com,yahoo.com,duckduckgo.com'
        ],
	],
	'cybersmonday.com' => [
        'enableSearchBox' => 1,
        'template' => 'searchforany',
		'enable_ads' => 0,
		'disable_cat_home' => 1,
        'apiConfig' => [
            'ip' => $api_02,
            'from' => 'google.com,bing.com,yahoo.com,duckduckgo.com'
        ],
	],
	'promocodeads.com' => [
        'enableSearchBox' => 1,
        'template' => 'updatecoupons',
		'enable_ads' => 0,
        'apiConfig' => [
            'ip' => $api_02,
            'from' => 'google.com,bing.com,yahoo.com,duckduckgo.com'
        ],
	],
	'promocodeslove.com' => [
        'enableSearchBox' => 1,
        'template' => 'newtemplate_3',
		'enable_ads' => 0,
        'apiConfig' => [
            'ip' => $api_02,
            'from' => 'google.com,bing.com,yahoo.com,duckduckgo.com'
        ],
	],
	'promocodesweb.com' => [
        'enableSearchBox' => 1,
        'template' => 'newtemplate_4',
		'enable_ads' => 0,
        'apiConfig' => [
            'ip' => $api_02,
            'from' => 'google.com,bing.com,yahoo.com,duckduckgo.com'
        ],
	],
	'buycoupondeals.com' => [
        'enableSearchBox' => 1,
        'template' => 'getsetcoupon',
		'enable_ads' => 0,
        'apiConfig' => [
            'ip' => $api_02,
            'from' => 'google.com,bing.com,yahoo.com,duckduckgo.com'
        ],
	],
	'coupondealsbonus.com' => [
        'enableSearchBox' => 1,
        'template' => 'newtemplate_3',
		'enable_ads' => 0,
        'apiConfig' => [
            'ip' => $api_02,
            'from' => 'google.com,bing.com,yahoo.com,duckduckgo.com'
        ],
	],
	'coupondeals247.com' => [
        'enableSearchBox' => 1,
        'template' => 'newtemplate_4',
		'enable_ads' => 0,
	],
	'coupondealsus.com' => [
        'enableSearchBox' => 1,
        'template' => 'updatecoupons',
		'enable_ads' => 0,
	],
	'ecouponscodes.com' => [
        'enableSearchBox' => 1,
        'template' => 'getsetcoupon',
		'enable_ads' => 0,
	],
	'deal-promo.com' => [
        'enableSearchBox' => 1,
        'template' => 'newtemplate_2',
		'enable_ads' => 0,
	],
	'couponcodesfree.com' => [
        'enableSearchBox' => 1,
        'template' => 'newtemplate_3',
		'enable_ads' => 0,
	],
	'couponpolicies.com' => [
        'enableSearchBox' => 1,
        'template' => 'newtemplate_4',
		'enable_ads' => 0,
	],
	'couponpuzzles.com' => [
        'enableSearchBox' => 1,
        'template' => 'getsetcoupon',
		'enable_ads' => 0,
	],
	'cbdscoupons.com' => [
        'enableSearchBox' => 1,
        'template' => 'getsetcoupon',
		'enable_ads' => 0,
	],
	'thesuncoupon.com' => [
        'enableSearchBox' => 1,
        'template' => 'newtemplate_4',
		'enable_ads' => 0,
	],
	'thenorthfaceblackfriday.us' => [
        'enableSearchBox' => 1,
        'template' => 'updatecoupons',
		'enable_ads' => 0,
	],
	'mycouponsearcher.com' => [
        'enableSearchBox' => 1,
        'template' => 'newtemplate_2',
		'enable_ads' => 0,
	],
	'searchdealtoday.com' => [
        'enableSearchBox' => 1,
        'template' => 'view',
		'enable_ads' => 1,
	],
];

?>