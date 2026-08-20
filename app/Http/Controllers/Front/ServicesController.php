<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Support\Facades\DB;


class ServicesController extends Controller
{
    private int $perpage = 8;
    public function index(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return DB::table('services')
            ->paginate($this->perpage);
    }
    public function article($id){
        $service = Services::where('id',$id)->get();
        if(isset($service)){
            return Services::where('id',$id)->get();
        } else{
            abort(404);
        }
    }
}
