<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Article extends Model
{
    use HasTranslations;

    protected $guarded = [];
    protected $table = 'articles';
    public $translatable = ['title', 'description','slug'];
}
