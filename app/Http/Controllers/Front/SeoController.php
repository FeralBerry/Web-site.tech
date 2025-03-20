<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Seo;


class SeoController extends Controller
{

    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return Seo::all();
    }
}
