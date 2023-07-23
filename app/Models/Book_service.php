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

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
