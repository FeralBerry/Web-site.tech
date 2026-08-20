<?php

use Illuminate\Support\Facades\Route;

$bovile = [
    'namespace' => 'Bovile',
    'prefix' => 'bovile'
];
Route::group($bovile,function (){
    Route::get('/', ['uses' => 'IndexController@index','as' => 'bovile-index']);
    Route::get('/{page}', ['uses' => 'IndexController@pages','as' => 'bovile-pages']);
    /*Route::get('/services', ['uses' => 'IndexController@services','as' => 'bovile-services']);
    Route::get('/gallery', ['uses' => 'IndexController@gallery','as' => 'bovile-gallery']);
    Route::get('/pricing', ['uses' => 'IndexController@pricing','as' => 'bovile-pricing']);
    Route::get('/faq', ['uses' => 'IndexController@faq','as' => 'bovile-faq']);
    Route::get('/error404', ['uses' => 'IndexController@error404','as' => 'bovile-404']);
    Route::get('/blog', ['uses' => 'IndexController@blog','as' => 'bovile-blog']);
    Route::get('/blog_post', ['uses' => 'IndexController@blogPost','as' => 'bovile-blog-post']);
    Route::get('/contact', ['uses' => 'IndexController@about','as' => 'bovile-contact']);*/
});

