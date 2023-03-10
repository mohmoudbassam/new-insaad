<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['image', 'imageable_type', 'imageable_id'];

    public function imageable()
    {
        return $this->morphTo();
    }
}
