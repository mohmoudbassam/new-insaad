<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['slider_id', 'locale', 'header_one', 'header_two', 'image'];


}
