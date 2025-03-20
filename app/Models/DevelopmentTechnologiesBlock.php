<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DevelopmentTechnologiesBlock extends Model
{
    protected $table = 'development_technologies_block';
    protected $fillable = [
        'block_title_ru',
        'block_title_eng',
        'icon',
        'block_p_ru',
        'block_p_eng',
        'link',
        'link_title_eng',
        'link_title_ru',
        'link_button_text_eng',
        'link_button_text_ru',
        'created_at',
        'updated_at',
    ];
}
