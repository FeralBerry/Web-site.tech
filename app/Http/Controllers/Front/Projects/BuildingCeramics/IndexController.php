<?php

namespace App\Http\Controllers\Front\Projects\BuildingCeramics;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        $data = array_merge([

        ]);
        return view('front.building_ceramics.index', $data);
    }
}
