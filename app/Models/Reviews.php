<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $table = 'reviews';
    protected $fillable = [
        'title',
        'profile_img',
        'logo_img',
        'description',
        'company_name',
        'company_url',
    ];
}
