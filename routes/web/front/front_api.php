<?php
use Illuminate\Support\Facades\Route;
$path = [
    'namespace' => 'App\Http\Controllers\Front',
    'prefix' => 'front'
];
Route::group($path,function() {
    Route::get('/main_slider',['uses' => 'MainSliderController@index', 'as' => 'front-main-slider-index']);
    Route::get('/advantages',['uses' => 'AdvantagesController@index', 'as' => 'front-advantages-index']);
    Route::get('/development-technologies',['uses' => 'DevelopmentTechnologiesController@index', 'as' => 'front-development-technologies-index']);
    Route::post('/app-for-dev',['uses' => 'ApplicationForDevelopmentController@index', 'as' => 'front-app-for-dev-index']);
    Route::get('/some-examples',['uses' => 'SomeExamplesController@index', 'as' => 'front-some-examples-index']);
    Route::get('/seo',['uses' => 'SeoController@index', 'as' => 'front-seo-index']);
    Route::get('/stages',['uses' => 'StagesController@index', 'as' => 'front-stages-index']);
    Route::get('/footer_quotes',['uses' => 'FooterQuotesController@index', 'as' => 'front-footer-quotes-index']);
});
