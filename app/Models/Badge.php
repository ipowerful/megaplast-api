<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{

    protected $fillable = ['name', 'color_id'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at', 'pivot'];


    public function color(): belongsTo
    {
        return $this->belongsTo(Color::class);
    }
}
