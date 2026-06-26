<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = [
    'title',
    'subtitle',
    'description',
    'image',
    'vision',
    'mission',
    'impact_total',
    'impact_label',
];
}
