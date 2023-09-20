<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    protected $fillable = [
        'name',
        'text',
        'slug',
        'image',
    ];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

}
