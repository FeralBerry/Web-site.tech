<?php

namespace App\Http\Controllers\Front\Projects\Clothing;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        $data = array_merge([

        ]);
        return view('front.clothing.index', $data);
    }
}
