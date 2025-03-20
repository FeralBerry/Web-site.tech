<?php
use Illuminate\Support\Facades\Route;
$back = [
    'namespace' => 'App\Http\Controllers\Back\Admin',
    'prefix' => 'admin',
    'middleware' => ['auth', 'web', 'admin'],
];
Route::group($back, function (){
    Route::get('/', function () {
        return "Hello Admin";
    });
});

