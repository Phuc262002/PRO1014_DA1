<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'description',
        'content',
        'img_post',
        'user_post_id',
        'category_id',
        'comment_count',
        'slug',
        'status'
    ];

}
