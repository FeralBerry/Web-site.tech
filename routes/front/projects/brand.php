<?php

use Illuminate\Support\Facades\Route;

$brand = [
    'namespace' => 'Brand',
    'prefix' => 'brand'
];
Route::group($brand,function (){
    Route::get('/', ['uses' => 'IndexController@index','as' => 'brand-index']);
});
