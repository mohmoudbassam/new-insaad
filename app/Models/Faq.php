<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;

class Faq extends Model
{
    use Translatable, SoftDeletes, HasFactory;

    public $translatedAttributes = ['question', 'answer'];
    protected $fillable = ['id', 'available'];
    public static function boot()
    {
        parent::boot();

        static::saving(function () {
            Cache::forget('faqs');
        });

        static::deleting(function () {
            Cache::forget('faqs');
        });
    }
}
