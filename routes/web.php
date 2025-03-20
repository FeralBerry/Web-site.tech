<?php

use Illuminate\Support\Facades\Route;

include "web/front/front_route.php";
include "web/back/admin/admin_route.php";
include "web/back/users/users_route.php";


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
