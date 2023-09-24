<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    protected $fillable = [
        'name',
        'units',
    ];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
