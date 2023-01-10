<?php

namespace App\Models;

use Illuminate\Support\Facades\Cache;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use Translatable, SoftDeletes, HasFactory;

    protected $fillable = ["id"];

    public $translatedAttributes = ['header_one', 'header_two', 'image'];


    public static function boot()
    {
        parent::boot();

        static::saving(function () {
            Cache::forget('universities');
        });

        static::deleting(function () {
            Cache::forget('universities');
        });
    }

    public function images()
    {
        return $this->morphMany(Image::class, "imageable");
    }


    public function saveImages($image)
    {
        $data = [];
        $data["image"] = $image;
        $data["imageable_type"] = get_class();
        $data["imageable_id"] = $this->id;
        $this->images()->insert($data);
    }
}
