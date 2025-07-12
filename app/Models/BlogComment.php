<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    protected $table = 'blog_comment';
    protected $fillable = [
        'id',
        'user_id',
        'blog_id',
        'text',
        'created_at',
        'updated_at',
    ];
}
