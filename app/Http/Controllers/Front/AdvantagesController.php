<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AdvantagesBlock;


class AdvantagesController extends Controller
{

    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return AdvantagesBlock::all();
    }
}
