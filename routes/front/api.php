<?php

use Illuminate\Support\Facades\Route;

$prefix = [
    'namespace' => 'App\Http\Controllers\Front\API',
    'prefix' => 'api'
];
Route::group($prefix,function (){
    Route::post('/main/portfolio',['uses' => 'Portfolio@mainGet', 'as' => 'portfolio-main-get']);
    Route::post('/get/reviews',['uses' => 'Reviews@mainGet', 'as' => 'reviews-main-get']);
    Route::post('/main/blog',['uses' => 'Blog@mainGet', 'as' => 'blog-main-get']);
    Route::post('/blog',['uses' => 'Blog@get', 'as' => 'blog-get']);
    Route::post('/blog/page/{id}',['uses' => 'Blog@getPage', 'as' => 'blog-get-page']);
    Route::post('/blog/{id}',['uses' => 'Blog@getArticle', 'as' => 'blog-get-article']);
    Route::post('/blog/next/{id}',['uses' => 'Blog@nextArticle', 'as' => 'blog-next-article']);
    Route::post('/blog/prev/{id}',['uses' => 'Blog@prevArticle', 'as' => 'blog-prev-article']);
    //Route::post('/sendMessage',['uses' => 'TelegramBot@sendMessage', 'as' => 'telegram-message']);
    Route::post('/send/contact/form',['uses' => 'Contact@sendContact', 'as' => 'send-contact']);
    Route::post('/send/hire/form',['uses' => 'Contact@sendHire', 'as' => 'send-hire']);
    Route::post('/modal',['uses' => 'Contact@modal', 'as' => 'modal-send']);
});
