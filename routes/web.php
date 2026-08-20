<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

include 'front/front_web.php';
include 'back/back_web.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');
