<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppFeedBack extends Model
{
    protected $table = 'app_feedback';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'checked',
        'created_at',
        'updated_at',
    ];
}
