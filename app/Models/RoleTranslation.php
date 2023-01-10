<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['role_id', 'locale', 'name'];


}
