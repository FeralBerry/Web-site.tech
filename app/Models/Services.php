<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'services';
    protected $fillable = [
        'img',
        'alt_img',
        'description_ru',
        'description_eng',
        'link',
        'title_ru',
        'title_eng',
        'created_at',
        'updated_at',
    ];
}
