<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogLikes extends Model
{
    protected $table = 'blog_likes';
    protected $fillable = [
        'id',
        'user_id',
        'blog_id',
        'created_at',
        'updated_at',
    ];
}
