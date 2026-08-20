<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    protected function getSeo(){
        return DB::table('seo')->get();
    }
    public function index($id = null){
        $data = array_merge([
            'seo' => $this->getSeo()
        ]);
        return view('front.index', $data);
    }
}
