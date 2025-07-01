<?php
use Illuminate\Support\Facades\Route;
$back = [
    'namespace' => 'App\Http\Controllers\Back\Users',
    'middleware' => ['auth', 'web'],
    'prefix' => 'user',
];
Route::group($back, function (){
    Route::get('/', ['uses' => 'IndexController@index','as' => 'user-index']);
});

