<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'img_banner',
        'introduction',
        'title',
        'status',
        'banner_type'
    ];
}
