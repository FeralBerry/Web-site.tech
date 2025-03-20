<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StagesBlock extends Model
{
    protected $table = 'stages_block';
    protected $fillable = [
        'url',
        'title',
        'description',
        'keywords',
        'robots',
        'image_url',
        'image_height',
        'image_width',
        'created_at',
        'updated_at',
    ];
}
