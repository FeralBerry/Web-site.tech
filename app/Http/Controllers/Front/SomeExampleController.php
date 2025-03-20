<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AdvantagesBlock;
use App\Models\SomeExamples;
use App\Models\SomeExamplesImg;


class SomeExampleController extends Controller
{

    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        $someExample = SomeExamples::all();
        $someExampleImg = SomeExamplesImg::all();
        foreach ($someExample as $item){
            foreach ($someExampleImg as $img){
                if($item->small_img_id == $img->block_id){

                    $someExample['small_img'] = 1;
                }
            }

        }

        return AdvantagesBlock::all();
    }
}
