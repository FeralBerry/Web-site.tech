<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    protected $fillable = [
        'id',
        'title_ru',
        'title_eng',
        'description_ru',
        'description_eng',
        'img',
        'author',
        'created_at',
        'updated_at',
    ];
}
