<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliciesTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['privacy','usage','refund','agreement','local','policies_id'];

}
