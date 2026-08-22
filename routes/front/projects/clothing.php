<?php

use Illuminate\Support\Facades\Route;

$clothing = [
    'namespace' => 'Clothing',
    'prefix' => 'clothing'
];
Route::group($clothing,function (){
    Route::get('/', ['uses' => 'IndexController@index','as' => 'clothing-index']);

});
