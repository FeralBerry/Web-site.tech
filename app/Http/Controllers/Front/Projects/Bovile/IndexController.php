<?php

namespace App\Http\Controllers\Front\Projects\Bovile;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index(){
        $data = array_merge([

        ]);
        return view('front.bovile.index', $data);
    }
    public function pages($page){
        $data = array_merge([

        ]);
        return view('front.bovile.'.$page, $data);
    }
    public function services(){
        $data = array_merge([

        ]);
        return view('front.bovile.services', $data);
    }
    public function gallery(){
        $data = array_merge([

        ]);
        return view('front.bovile.gallery', $data);
    }
    public function pricing(){
        $data = array_merge([

        ]);
        return view('front.bovile.pricing', $data);
    }
    public function faq(){
        $data = array_merge([

        ]);
        return view('front.bovile.faq', $data);
    }
    public function error404(){
        $data = array_merge([

        ]);
        return view('front.bovile.error404', $data);
    }
    public function blog(){
        $data = array_merge([

        ]);
        return view('front.bovile.blog', $data);
    }
    public function blogPost(){
        $data = array_merge([

        ]);
        return view('front.bovile.blog_post', $data);
    }
    public function contact(){
        $data = array_merge([

        ]);
        return view('front.bovile.contact', $data);
    }
}
