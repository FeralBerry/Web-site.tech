<?php

use Illuminate\Support\Facades\Route;

include 'api.php';
$main = [
    'namespace' => 'App\Http\Controllers\Front'
];
Route::group($main,function () {
    Route::get('/', ['uses' => 'IndexController@index', 'as' => 'front-index']);
});
$prefix = [
    'namespace' => 'App\Http\Controllers\Front\Projects'
];

Route::group($prefix,function (){
    // Project name & package
    $projects = [
        'bovile',
        'brand',
        'buildingceramics',
        'clothing',
        'stayfit',
        'monsterat',
        'jahanrahat'
    ];
    foreach ($projects as $project) {
        $settings = [
            'namespace' => $project
        ];
        Route::group($settings,function () use ($project) {
            Route::get('/{'.$project.'}', ['uses' => 'IndexController@index','as' => $project.'-index']);
            Route::get('/{'.$project.'}/{page}', ['uses' => 'IndexController@pages','as' => $project.'-pages']);
        });
    }
});
Route::post('/webhook',function (){
    return response('OK',200);
});
