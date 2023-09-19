<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Stock extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'color_id',
    ];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function color(): belongsTo
    {
        return $this->belongsTo(Color::class);
    }
}
