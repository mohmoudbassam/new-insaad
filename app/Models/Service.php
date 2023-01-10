<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use Translatable, SoftDeletes, HasFactory;

    protected $fillable = ['id','order','logistics','image','icon'];

    public $translatedAttributes = ['title','slug', 'description','meta_description','meta_keywords'];

}
