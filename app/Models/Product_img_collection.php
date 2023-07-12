<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_img_collection extends Model
{
    use HasFactory;
    protected $table = "product_img_collection";


    protected $fillable = [
        'product_id',
        'image_collection'
    ];
}
