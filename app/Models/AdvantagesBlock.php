<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvantagesBlock extends Model
{
    protected $table = 'advantages_block';
    protected $fillable = [
        'tab_icon',
        'title_eng',
        'title_ru',
        'description_eng',
        'description_ru',
        'link',
        'link_title_eng',
        'link_title_ru',
        'link_button_text_eng',
        'link_button_text_ru',
        'created_at',
        'updated_at',
    ];
}
