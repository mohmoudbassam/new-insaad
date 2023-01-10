<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image','link','type'];

    const TYPE_PARTNER = 'partner';
    const TYPE_CLIENT = 'client';
    const ARR_TYPE = [
        self::TYPE_CLIENT,
        self::TYPE_PARTNER
    ];
    public static function boot()
    {
        parent::boot();

        static::saving(function () {
            Cache::forget('partners');
            Cache::forget('clients');
        });

        static::deleting(function () {
            Cache::forget('partners');
            Cache::forget('clients');
        });
    }
}
