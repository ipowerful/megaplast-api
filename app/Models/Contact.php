<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'telegram',
        'whatsapp',
        'time_from',
        'days_from',
        'time_to',
        'days_to',
        'map_lat',
        'map_long',
        'map_zoom',
        'is_pickup',
    ];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
