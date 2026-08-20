<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactFiles extends Model
{
    protected $table = "contact_files";
    protected $fillable = [
        'path',
        'contact_id',
        'created_at',
        'updated_at',
    ];

}
