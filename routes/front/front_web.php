<?php

use Illuminate\Support\Facades\Route;

include 'api.php';
$main = [
    'namespace' => 'App\Http\Controllers\Front'
];
Route::group($main,function () {
    Route::get('/', ['uses' => 'IndexController@index', 'as' => 'front-index']);
});
$prefix = [
    'namespace' => 'App\Http\Controllers\Front\Projects'
];
Route::group($prefix,function (){
    include 'projects/bovile.php';
    include 'projects/brand.php';
    include 'projects/building_ceramics.php';
    include 'projects/clothing.php';
    include 'projects/stayfit.php';
    include 'projects/monsterat.php';
    include 'projects/jahanrahat.php';
});
Route::post('/webhook',function (){
    return response('OK',200);
});
