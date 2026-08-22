<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogLikes;


class LastTwoNewsController extends Controller
{

    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return Blog::all()
            ->sortByDesc('created_at')
            ->take(2);
    }
}
