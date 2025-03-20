<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\MainSlider;
use Illuminate\Support\Facades\DB;


class MainSliderController extends Controller
{

    public function index()
    {
        return DB::table('main_slider')->get();
    }
}
