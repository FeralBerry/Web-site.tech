<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\FooterQuotes;


class FooterQuotesController extends Controller
{

    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return FooterQuotes::all();
    }
}
