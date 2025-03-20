<?php
use Illuminate\Support\Facades\Route;

$back = [
    'namespace' => 'App\Http\Controllers\Back\Admin',
    'prefix' => 'admin',
    'middleware' => ['auth', 'web'],
];
Route::group($back,function() {
    Route::get('/', function () {
        return "Hello Admin";
    });
});

