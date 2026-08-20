<?php

namespace App\Http\Controllers\Front\Projects\JahanRahat;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index(){
        $data = array_merge([

        ]);
        return view('front.jahanrahat.index', $data);
    }
}
