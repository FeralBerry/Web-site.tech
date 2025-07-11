<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\MainSlider;
use Illuminate\Support\Facades\DB;


class AboutSliderController extends Controller
{

    public function index()
    {
        return DB::table('about_slider')->get();
    }
}
