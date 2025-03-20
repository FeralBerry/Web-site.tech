<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterQuotes extends Model
{
    protected $table = 'footer_quotes';
    protected $fillable = [
        'author',
        'text',
        'created_at',
        'updated_at',
    ];
}
