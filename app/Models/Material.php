<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Material extends Model
{
    protected $fillable = [

        'title',
        'slug',
        'description',
        'thumbnail',
        'type',
        'file',
        'video_url',
        'is_active',

    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($material) {

            $material->slug = Str::slug(
                $material->title
            );

        });
    }
    
    public function getYoutubeIdAttribute()
{
    preg_match(
        '/(?:youtube\.com\/watch\?v=|youtu\.be\/)([^&]+)/',
        $this->video_url,
        $matches
    );

    return $matches[1] ?? null;
}
}