<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_service extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'service_id',
        'pet_name',
        'book_date',
        'book_time',
        'description',
        'admin_note',
        'status',
        'total_price'
    ];
}
