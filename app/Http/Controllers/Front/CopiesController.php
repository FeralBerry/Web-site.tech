<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class CopiesController extends Controller
{
    private int $perpage = 8;
    public function index(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return DB::table('some_examples_block')
            ->paginate($this->perpage);
    }
    public function article($id){
        return DB::table('some_examples_block')
            ->where('id', $id)
            ->get();
    }
}
