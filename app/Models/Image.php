<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'image',
        'product_color_id',
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
