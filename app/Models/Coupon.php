<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'coupon_hash_id',
        'coupon_name',
        'discount',
        'start_at',
        'end_at'
    ];
}
