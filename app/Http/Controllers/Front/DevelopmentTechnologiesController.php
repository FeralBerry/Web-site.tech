<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\DevelopmentTechnologiesBlock;


class DevelopmentTechnologiesController extends Controller
{

    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return DevelopmentTechnologiesBlock::all();
    }
}
