<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EvacuationRoute extends Model
{
    protected $fillable = [

        'title',

        'disaster_type',

        'start_location',
        'start_lat',
        'start_lng',

        'safe_location',
        'safe_lat',
        'safe_lng',

        'estimated_time',

        'description',

        'is_active',
    ];
}