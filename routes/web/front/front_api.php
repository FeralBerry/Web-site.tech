<?php

use Illuminate\Support\Facades\Route;

$path = [
    'namespace' => 'App\Http\Controllers\Front',
    'prefix' => 'front'
];
Route::group($path,function() {
    // проверка авторизации пользователя возвращает данные авторизированного пользователя
    Route::post('/check_auth/{user_id}',['uses' => 'CheckAuthController@checkAuth', 'as' => 'checkAuth']);

    Route::get('/main_slider',['uses' => 'MainSliderController@index', 'as' => 'front-main-slider-index']);
    Route::get('/about_slider',['uses' => 'AboutSliderController@index', 'as' => 'front-about-slider-index']);
    //Main blocks
    Route::get('/advantages',['uses' => 'AdvantagesController@index', 'as' => 'front-advantages-index']);
    Route::get('/development-technologies',['uses' => 'DevelopmentTechnologiesController@index', 'as' => 'front-development-technologies-index']);
    Route::post('/app-for-dev',['uses' => 'ApplicationForDevelopmentController@index', 'as' => 'front-app-for-dev-index']);
    Route::get('/some-examples',['uses' => 'SomeExamplesController@index', 'as' => 'front-some-examples-index']);
    Route::get('/seo',['uses' => 'SeoController@index', 'as' => 'front-seo-index']);
    Route::get('/stages',['uses' => 'StagesController@index', 'as' => 'front-stages-index']);
    Route::get('/footer_quotes',['uses' => 'FooterQuotesController@index', 'as' => 'front-footer-quotes-index']);
    Route::get('/get-last-two-news',['uses' => 'LastTwoNewsController@index', 'as' => 'front-get-last-two-news-index']);
    // Blog
    Route::post('/blog_likes/{id}',['uses' => 'BlogController@likes', 'as' => 'front-blog-likes']);
    Route::post('/blog/comments/{id}',['uses' => 'BlogController@comments', 'as' => 'front-blog-comments']);
    Route::post('/blog/add_comment/{id}',['uses' => 'BlogController@addComments', 'as' => 'front-blog-add-comments']);
    Route::get('/blog',['uses' => 'BlogController@index', 'as' => 'front-blog-index']);
    Route::get('/blog/{id}',['uses' => 'BlogController@article', 'as' => 'front-blog-article']);
    //Copies
    Route::get('/copies',['uses' => 'CopiesController@index', 'as' => 'front-copies-index']);
    Route::get('/copies/article/{id}',['uses' => 'CopiesController@article', 'as' => 'front-copies-article']);
    //service
    Route::get('/service',['uses' => 'ServicesController@index', 'as' => 'front-service-index']);
    Route::get('/example/{id}',['uses' => 'SomeExamplesController@article', 'as' => 'front-service-article']);
});
