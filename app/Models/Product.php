<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_full',
//        'slug',
        'article',
//        'price',
//        'price_old',
//        'is_popular',
//        'is_in_stock',
        'measure_id',
        'category_id',
    ];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    protected $casts = [
        'is_popular' => 'boolean',
        'is_in_stock' => 'boolean',
    ];

    public function measure(): belongsTo
    {
        return $this->belongsTo(Measure::class);
    }

    public function category(): belongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function industries(): BelongsToMany
    {
        return $this->belongsToMany(Industry::class);
    }

    public function badges(): BelongsToMany
    {
        return $this->belongsToMany(Badge::class);
    }

    public function colors(): hasMany
    {
        return $this->hasMany(ProductColor::class)->orderBy('price', 'desc');
    }
}
