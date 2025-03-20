<?php
use Illuminate\Support\Facades\Route;
$path = [
    'namespace' => 'App\Http\Controllers\Front',
];
Route::group($path,function() {
    Route::get('/', ['uses' => 'IndexController@index','as' => 'front-index']);
});
