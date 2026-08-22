<?php

namespace App\Http\Controllers\Front\API;

use Illuminate\Support\Facades\DB;
use JetBrains\PhpStorm\NoReturn;


class Reviews
{

    public function mainGet()
    {
        return DB::table('reviews')->get();
    }
}
