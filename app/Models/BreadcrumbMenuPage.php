<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BreadcrumbMenuPage extends Model
{
    protected $table = 'breadcrumb_menu_page';
    protected $fillable = [
        'id',
        'url',
        'link',
        'name_ru',
        'name_eng',
    ];
}
