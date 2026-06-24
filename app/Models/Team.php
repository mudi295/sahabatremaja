<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
        'photo',
        'position',
        'division',
        'bio',
        'sort_order',
        'is_active',
    ];
}