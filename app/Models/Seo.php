<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $table = 'seo';
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
