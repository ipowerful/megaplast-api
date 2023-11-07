<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'filename',
        'product_color_id',
        'sort_order',
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
