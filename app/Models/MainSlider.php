<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainSlider extends Model
{
    protected $table = 'main_slider';
    protected $fillable = [
        'img',
        'alt_img',
        'slider_title_ru',
        'slider_title_eng',
        'slider_p_ru',
        'slider_p_eng',
        'created_at',
        'updated_at',
    ];
}
