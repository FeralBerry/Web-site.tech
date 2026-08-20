<?php

namespace App\Http\Controllers\Front\Projects\Monsterat;

use App\Http\Controllers\Controller;

class HeaderController extends Controller
{
    public function index($id){
        $data = array_merge([
            'id' => $id
        ]);
        return view("front.monsterat.pages.headers.header$id", $data);
    }
}
