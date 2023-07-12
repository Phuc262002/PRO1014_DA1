<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'order_hash_id',
        'user_id',
        'coupon_id',
        'total',
        'payment_id',
        'status'
    ];
}
