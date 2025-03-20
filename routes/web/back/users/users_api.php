<?php
use Illuminate\Support\Facades\Route;
$back = [
    'namespace' => 'App\Http\Controllers\Back\Users',
    'middleware' => ['auth', 'web'],
    'prefix' => 'users',
];
Route::group($back, function (){
    Route::get('/', function () {
        return "Hello User";
    });
});

