<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policies extends Model
{
    use HasFactory , Translatable;

    protected $fillable = ['id'];

    public $translatedAttributes = ['privacy','usage','refund','agreement'];


}
