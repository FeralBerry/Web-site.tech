<?php

namespace App\Http\Controllers\Front\Projects\Monsterat;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        $data = array_merge([

        ]);
        return view('front.monsterat.index', $data);
    }
    public function indexPricing(){
        $data = array_merge([

        ]);
        return view('front.monsterat.pages.home.pricing', $data);
    }
    public function indexProducts(){
        $data = array_merge([

        ]);
        return view('front.monsterat.pages.home.products', $data);
    }
    public function indexHistory(){
        $data = array_merge([

        ]);
        return view('front.monsterat.pages.home.history', $data);
    }
    public function indexPopularVideo(){
        $data = array_merge([

        ]);
        return view('front.monsterat.pages.home.video', $data);
    }
    public function indexPopularSlider(){
        $data = array_merge([

        ]);
        return view('front.monsterat.pages.home.slider', $data);
    }
    public function indexAnimated(){
        $data = array_merge([

        ]);
        return view('front.monsterat.pages.home.animated', $data);
    }
    public function indexOnePage(){
        $data = array_merge([

        ]);
        return view('front.monsterat.pages.home.one_page', $data);
    }
    public function indexSimple(){
        $data = array_merge([

        ]);
        return view('front.monsterat.pages.home.simple', $data);
    }
    public function indexStore(){
        $data = array_merge([

        ]);
        return view('front.monsterat.pages.home.store', $data);
    }
    public function indexShop(){
        $data = array_merge([

        ]);
        return view('front.monsterat.pages.home.shop', $data);
    }
}
