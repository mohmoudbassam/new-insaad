<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model

{
    use   HasFactory;

    protected $fillable = [
        'full_name',
        'company_name',
        'phone',
        'email',
        'online_store_url',
        'online_store_platform',
        'message',
        'count_orders',
        'count_orders_ads'
    ];

}
