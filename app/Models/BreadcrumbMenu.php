<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BreadcrumbMenu extends Model
{
    protected $table = 'breadcrumb_menu';
    protected $fillable = [
        'id',
        'url',
        'title_ru',
        'title_eng',
        'created_at',
        'updated_at',
    ];
}
