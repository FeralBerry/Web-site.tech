<?php

namespace App\Http\Controllers\Back\Users;

use App\Http\Controllers\Back\BackController;
use App\Models\BreadcrumbMenu;
use App\Models\BreadcrumbMenuPage;
use Illuminate\Support\Facades\Request;


class IndexController extends BackController
{
    public function index(){
        $breadcrumbMenu = BreadcrumbMenu::all()->where('url',Request::path());
        $breadcrumbMenuPage = BreadcrumbMenuPage::all()->where('url',Request::path());
        foreach ($breadcrumbMenu as $item){
            $item->setAttribute('breadcrumbMenuPage',$breadcrumbMenuPage);
        }
        $data = [
            'userSettings' => $this->userSettings(),
            'breadcrumb' => $breadcrumbMenu
        ];
        return view('back.user.index',$data);
    }
}
