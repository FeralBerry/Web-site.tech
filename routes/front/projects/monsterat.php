<?php

use Illuminate\Support\Facades\Route;

$stayfit = [
    'namespace' => 'Monsterat',
    'prefix' => 'monsterat'
];
Route::group($stayfit,function (){
    //Home
    Route::get('/', ['uses' => 'IndexController@index','as' => 'monsterat-index']);
    Route::get('/index/pricing', ['uses' => 'IndexController@indexPricing','as' => 'monsterat-index-pricing']);
    Route::get('/index/products', ['uses' => 'IndexController@indexProducts','as' => 'monsterat-index-products']);
    Route::get('/index/history', ['uses' => 'IndexController@indexHistory','as' => 'monsterat-index-history']);
    Route::get('/index/popular/video', ['uses' => 'IndexController@indexPopularVideo','as' => 'monsterat-index-popular-video']);
    Route::get('/index/popular/slider', ['uses' => 'IndexController@indexPopularSlider','as' => 'monsterat-index-popular-slider']);
    Route::get('/index/animated', ['uses' => 'IndexController@indexAnimated','as' => 'monsterat-index-animated']);
    Route::get('/index/one_page', ['uses' => 'IndexController@indexOnePage','as' => 'monsterat-index-one_page']);
    Route::get('/index/simple', ['uses' => 'IndexController@indexSimple','as' => 'monsterat-index-simple']);
    Route::get('/index/store', ['uses' => 'IndexController@indexStore','as' => 'monsterat-index-store']);
    Route::get('/index/shop', ['uses' => 'IndexController@indexShop','as' => 'monsterat-index-shop']);
    //Header
    Route::get('/header/{id}', ['uses' => 'HeaderController@index','as' => 'monsterat-header']);






    Route::get('/about', ['uses' => 'AboutController@index','as' => 'monsterat-about']);
    Route::get('/about1', ['uses' => 'AboutController@index1','as' => 'monsterat-about1']);
    Route::get('/about2', ['uses' => 'AboutController@index2','as' => 'monsterat-about2']);
    Route::get('/services', ['uses' => 'ServicesController@index','as' => 'monsterat-services']);
    Route::get('/services1', ['uses' => 'ServicesController@index1','as' => 'monsterat-services1']);
    Route::get('/services2', ['uses' => 'ServicesController@index2','as' => 'monsterat-services2']);
    Route::get('/services2', ['uses' => 'ServicesController@index2','as' => 'monsterat-services2']);
    Route::get('/contact', ['uses' => 'ContactController@index','as' => 'monsterat-contact']);
    Route::get('/contact1', ['uses' => 'ContactController@index1','as' => 'monsterat-contact1']);
    Route::get('/teh', ['uses' => 'ContactController@index2','as' => 'monsterat-teh']);
    Route::get('/teh1', ['uses' => 'ContactController@index3','as' => 'monsterat-teh1']);
    Route::get('/pricing', ['uses' => 'ContactController@index4','as' => 'monsterat-pricing']);








});
