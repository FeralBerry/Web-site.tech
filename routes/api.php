<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
include 'web\front\front_api.php';
include 'web\back\users\users_api.php';
include 'web\back\admin\admin_api.php';

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/*Route::patch('/change/language',[App\Http\Controllers\LanguageController::class, 'language']);*/
