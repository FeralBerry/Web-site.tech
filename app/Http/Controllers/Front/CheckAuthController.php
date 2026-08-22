<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CheckAuthController extends Controller
{
    public function checkAuth($user_id)
    {
        return DB::table('users')
            ->where('id', $user_id)
            ->get();
    }
}
