<?php

use Illuminate\Support\Facades\Route;

$stayfit = [
    'namespace' => 'Stayfit',
    'prefix' => 'stayfit'
];
Route::group($stayfit,function (){
    Route::get('/', ['uses' => 'IndexController@index','as' => 'stayfit-index']);
    Route::get('/contact', ['uses' => 'IndexController@contact','as' => 'stayfit-contact']);
    Route::get('/blog', ['uses' => 'IndexController@blog','as' => 'stayfit-blog']);
    Route::get('/blog_left_right', ['uses' => 'IndexController@blogLeftRight','as' => 'stayfit-blog-left-right']);
    Route::get('/about', ['uses' => 'IndexController@about','as' => 'stayfit-about']);
    Route::get('/blog_details', ['uses' => 'IndexController@blogDetails','as' => 'stayfit-blog-details']);
});
