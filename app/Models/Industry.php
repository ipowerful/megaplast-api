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
        'seo_heading',
        'seo_text',
        'sorting',
    ];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at', 'pivot'];

}
