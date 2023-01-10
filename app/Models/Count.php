<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Count extends Model
{
    use HasFactory, Translatable;

    protected $fillable = ['count','available','image'];
    public $translatedAttributes = ['name','item'];

    public static function boot()
    {
        parent::boot();

        static::saving(function () {
            Cache::forget('numbers');
        });

        static::deleting(function () {
            Cache::forget('numbers');
        });
    }

    public function image()
    {
        return $this->morphOne(Image::class, "imageable");
    }


    public function saveImage($image)
    {
        $data["image"] = $image;
        $data["imageable_type"] = get_class();
        $data["imageable_id"] = $this->id;
        $this->image()->insert($data);
    }

    public function updateImage($image)
    {
        $this->image()->where("imageable_id", $this->id)->update(["image" => $image]);
    }
}
