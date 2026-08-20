<?php

namespace App\Http\Controllers\Front\Projects\Stayfit;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        $data = array_merge([

        ]);
        return view('front.stayfit.index', $data);
    }
    public function contact(){
        $data = array_merge([

        ]);
        return view('front.stayfit.contact', $data);
    }
    public function blog(){
        $data = array_merge([

        ]);
        return view('front.stayfit.blog', $data);
    }
    public function blogLeftRight(){
        $data = array_merge([

        ]);
        return view('front.stayfit.blog_left_right', $data);
    }
    public function about(){
        $data = array_merge([

        ]);
        return view('front.stayfit.about', $data);
    }
    public function blogDetails(){
        $data = array_merge([

        ]);
        return view('front.stayfit.blog_details', $data);
    }

}
