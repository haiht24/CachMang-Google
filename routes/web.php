<?php
Route::get('/', 'CachMangController@index');
Route::get('/suggest', 'SuggestController@index');

Route::get('search', 'CachMangController@search');
Route::get('/term', 'CachMangController@term');
Route::get('/policy', 'CachMangController@policy');
Route::get('/contact', 'CachMangController@contact');
Route::get('/sitemap.xml', 'SitemapController@index');
Route::get('/sitemap/keywords_{page}.xml', 'SitemapController@keywords');

Route::post('/save', 'CachMangController@save');
Route::post('/save/save-many', 'CachMangController@saveMany');
Route::get('/api/{q}', 'CachMangController@api');
Route::get('/query', 'CachMangController@searchMobile');
Route::get('/{q}', 'CachMangController@view_search')->name('search');
Route::get('/amp/{q}', 'CachMangController@view_amp_search')->name('amp-search');