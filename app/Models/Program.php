<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'title',
        'thumbnail',
        'description',
        'location',
        'event_date',
        'status',
    ];
}