<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    protected $fillable = [
        'price',
        'price_old',
        'is_in_stock',
        'product_id',
        'color_id',
        'images',
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    protected $casts = [
        'is_in_stock' => 'boolean',
        'images' => 'array',
    ];

    public function color(): belongsTo
    {
        return $this->belongsTo(Color::class);
    }
}
