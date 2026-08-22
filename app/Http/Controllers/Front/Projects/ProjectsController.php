<?php

namespace App\Http\Controllers\Front\Projects;

use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function index($project): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $data = array_merge([

        ]);
        return view('front.'.$project.'.index', $data);
    }
    public function pages($project,$page): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $data = array_merge([

        ]);
        return view('front.'.$project.'.'.$page, $data);
    }
}
