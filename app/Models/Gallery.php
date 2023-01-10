<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use  HasFactory;

    protected $fillable = ["id", "type", "available", 'url', 'image'];

    const VIDEO_TYPE = 'VIDEO';
    const IMAGE_TYPE = 'IMAGE';

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = getYoutubeId($value);
    }

    public static function boot()
    {
        parent::boot();

        static::saving(function () {
            Cache::forget('galleries');
        });

        static::deleting(function () {
            Cache::forget('galleries');
        });
    }

}
