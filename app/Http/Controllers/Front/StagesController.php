<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\StagesBlock;


class StagesController extends Controller
{

    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return StagesBlock::all();
    }
}
