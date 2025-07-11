<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSlider extends Model
{
    protected $table = 'about_slider';
    protected $fillable = [
        'img',
        'alt_img',
        'mini_img',
        'title_ru',
        'title_eng',
        'slider_p_ru',
        'slider_p_eng',
        'created_at',
        'updated_at',
    ];
}
