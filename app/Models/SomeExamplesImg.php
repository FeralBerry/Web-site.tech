<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SomeExamplesImg extends Model
{
    protected $table = 'some_examples_small_img';
    protected $fillable = [
        'link',
        'alt',
        'block_id',
        'created_at',
        'updated_at',
    ];
}
