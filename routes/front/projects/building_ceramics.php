<?php

use Illuminate\Support\Facades\Route;

$building_ceramics = [
    'namespace' => 'BuildingCeramics',
    'prefix' => 'building_ceramics'
];
Route::group($building_ceramics,function (){
    Route::get('/', ['uses' => 'IndexController@index','as' => 'building-ceramics']);
});
