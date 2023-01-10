<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceTranslation extends Model
{
    protected $fillable = ['locale', 'service_id', 'title','slug', 'description', 'meta_description', 'meta_keywords'];
}
