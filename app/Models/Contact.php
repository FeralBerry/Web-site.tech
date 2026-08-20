<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model
{
    protected $table = 'contact';
    protected $fillable = [
        'name',
        'contact',
        'message',
        'created_at',
        'updated_at',
    ];
    public function files(): HasMany {
        return $this->hasMany(ContactFiles::class, 'contact_id');
    }
}
