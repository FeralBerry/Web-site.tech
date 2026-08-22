<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\UserSettings;
use Illuminate\Support\Facades\Auth;

class BackController extends Controller
{
    protected function userSettings(){
        return UserSettings::where('user_id',Auth::id());
    }
    protected function authUserLang(){
        $user_settings = UserSettings::where('user_id',Auth::id());
        if(empty($user_settings)){
            return 0;//rus
        } else {
            foreach ($user_settings as $item){
                return $item->lang;
            }
        }
    }
}
