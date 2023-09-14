<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'price',
        'price_old',
        'is_popular',
        'stock_id',
        'measure_id',
        'category_id',
    ];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function stock(): belongsTo
    {
        return $this->belongsTo(Stock::class);
    }

    public function measure(): belongsTo
    {
        return $this->belongsTo(Measure::class);
    }

    public function category(): belongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
