<?php

namespace App\Models;

use Spatie\Permission\Models\Role as SpatieRole;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends SpatieRole
{
    use Translatable, HasFactory;

    protected $fillable = ["id"];

    public $translatedAttributes = ['name'];

}
