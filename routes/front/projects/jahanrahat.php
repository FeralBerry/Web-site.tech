<?php

use Illuminate\Support\Facades\Route;

$brand = [
    'namespace' => 'JahanRahat',
    'prefix' => 'jahanrahat'
];
Route::group($brand,function (){
    Route::get('/', ['uses' => 'IndexController@index','as' => 'jahanrahat-index']);
});
