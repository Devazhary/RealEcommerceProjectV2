<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_phone_one',
        'customer_phone_two',
        'customer_governoment',
        'customer_town',
        'delivery_price',
        'customer_address',
        'total_price',
        'status',
    ];

}
