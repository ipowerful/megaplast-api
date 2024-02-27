<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;

class ProductColor extends Model
{
    protected $fillable = [
        'price',
        'price_old',
        'is_in_stock',
        'product_id',
        'color_id',
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    protected $casts = [
        'is_in_stock' => 'boolean',
    ];

    public function color(): belongsTo
    {
        return $this->belongsTo(Color::class);
    }

    public function images(): hasMany
    {
        return $this->hasMany(Image::class)->orderBy('sort_order');
    }

    public function has_main_images(): hasMany
    {
        return $this->hasMany(Image::class)->where('is_main', true)->orderBy('sort_order');
    }
}
