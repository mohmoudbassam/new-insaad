<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class AboutUs extends Model
{
    use HasFactory , Translatable;

    protected $fillable = ['id'];

    public $translatedAttributes = ['vision','mission','description_one','description_two'];

    public static function boot()
    {
        parent::boot();

        static::saving(function () {
            Cache::forget('about');
        });

        static::deleting(function () {
            Cache::forget('about');
        });
    }

}
