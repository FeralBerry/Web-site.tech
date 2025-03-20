<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SomeExamples extends Model
{
    protected $table = 'some_examples_block';
    protected $fillable = [
        'thumb_img',
        'slide_img',
        'title_ru',
        'title_eng',
        'link',
        'link_title_eng',
        'link_title_ru',
        'link_text_eng',
        'link_text_ru',
        'description_ru',
        'description_eng',
        'small_img_id',
        'created_at',
        'updated_at',
    ];
}
