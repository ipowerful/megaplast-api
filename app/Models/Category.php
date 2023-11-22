<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'seo_heading',
        'seo_text',
    ];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];


    public function parameters(): BelongsToMany
    {
        return $this->belongsToMany(Parameter::class);
    }
}
