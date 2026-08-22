<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CopiesWork extends Model
{
    protected $table = 'copies_work';
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
