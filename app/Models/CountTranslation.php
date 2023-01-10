<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CountTranslation extends Model
{

    protected $fillable = ['name','item','locale','count_id'];
}
