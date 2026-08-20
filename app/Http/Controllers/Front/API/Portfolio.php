<?php

namespace App\Http\Controllers\Front\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Portfolio
{
    private $perpage = 12;
    public function mainGet(Request $request): \Illuminate\Pagination\LengthAwarePaginator
    {
        $count = $request['count'];
        $per_page = $this->perpage + $count;
        return DB::table('portfolio')->paginate($per_page);
    }
}
