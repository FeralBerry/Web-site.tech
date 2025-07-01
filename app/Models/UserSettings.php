<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSettings extends Model
{
    protected $table = 'user_settings';
    protected $fillable = [
        'id',
        'user_id',
        'lang',
        'created_at',
        'updated_at',
    ];
}
