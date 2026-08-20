<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AdvantagesBlock;
use App\Models\SomeExamples;
use App\Models\SomeExamplesImg;


class SomeExamplesController extends Controller
{

    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return SomeExamples::all()->sortBy('created_at')->take(2);
    }
    public function article($id){
        $someExample = SomeExamples::where('id',$id)->get();
        if(isset($someExample)){
            return $someExample;
        } else {
            abort(404);
        }
    }
}
