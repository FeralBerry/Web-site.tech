<?php

use http\Client\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::middleware('auth:api')->post('/logout', [AuthController::class, 'logout']);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
$path = [
    'namespace' => 'App\Http\Controllers\Front',
    'prefix' => 'front'
];
Route::group($path,function() {
    // проверка авторизации пользователя возвращает данные авторизированного пользователя
    Route::post('/check_auth/{user_id}',['uses' => 'CheckAuthController@checkAuth', 'as' => 'checkAuth']);

    Route::get('/main_slider',['uses' => 'MainSliderController@index', 'as' => 'front-main-slider-index']);
    Route::get('/about_slider',['uses' => 'AboutSliderController@index', 'as' => 'front-about-slider-index']);

    Route::get('/advantages',['uses' => 'AdvantagesController@index', 'as' => 'front-advantages-index']);
    Route::get('/development-technologies',['uses' => 'DevelopmentTechnologiesController@index', 'as' => 'front-development-technologies-index']);
    Route::post('/app-for-dev',['uses' => 'ApplicationForDevelopmentController@index', 'as' => 'front-app-for-dev-index']);
    Route::get('/some-examples',['uses' => 'SomeExamplesController@index', 'as' => 'front-some-examples-index']);
    Route::get('/seo',['uses' => 'SeoController@index', 'as' => 'front-seo-index']);
    Route::get('/stages',['uses' => 'StagesController@index', 'as' => 'front-stages-index']);
    Route::get('/footer_quotes',['uses' => 'FooterQuotesController@index', 'as' => 'front-footer-quotes-index']);
    Route::get('/get-last-two-news',['uses' => 'LastTwoNewsController@index', 'as' => 'front-get-last-two-news-index']);
    Route::post('/blog_likes/{id}',['uses' => 'BlogController@likes', 'as' => 'front-blog-likes']);
    Route::get('/blog',['uses' => 'BlogController@index', 'as' => 'front-blog-index']);
    Route::get('/blog/{id}',['uses' => 'BlogController@article', 'as' => 'front-blog-article']);
});
