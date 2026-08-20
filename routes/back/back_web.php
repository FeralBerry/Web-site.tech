<?php
use Illuminate\Support\Facades\Route;

include 'api.php';
$main = [
    'namespace' => 'App\Http\Controllers\Back',
    'prefix' => 'back'
];
Route::group($main,function () {
    Route::get('/seo', ['uses' => 'SeoController@get', 'as' => 'back-seo-get']);
    Route::post('/seo', ['uses' => 'SeoController@post', 'as' => 'back-seo-post']);
    Route::get('/seo/add', ['uses' => 'SeoController@postIndex', 'as' => 'back-seo-post-index']);
    Route::get('/seo/edit/{id}', ['uses' => 'SeoController@updateIndex', 'as' => 'back-seo-update-index']);
    Route::put('/seo/edit/{id}', ['uses' => 'SeoController@update', 'as' => 'back-seo-update']);
    Route::delete('/seo/delete/{id}', ['uses' => 'SeoController@delete', 'as' => 'back-seo-delete']);


    Route::get('/blog', ['uses' => 'BlogController@get', 'as' => 'back-blog-get']);
    Route::post('/blog', ['uses' => 'BlogController@post', 'as' => 'back-blog-post']);
    Route::get('/blog/add', ['uses' => 'BlogController@postIndex', 'as' => 'back-blog-post-index']);
    Route::get('/blog/edit/{id}', ['uses' => 'BlogController@updateIndex', 'as' => 'back-blog-update-index']);
    Route::put('/blog/edit/{id}', ['uses' => 'BlogController@update', 'as' => 'back-blog-update']);
    Route::delete('/blog/delete/{id}', ['uses' => 'BlogController@delete', 'as' => 'back-blog-delete']);
});
