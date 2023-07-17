<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'sku',
        'name',
        'description_summary',
        'description_detail',
        'category_id',
        'price',
        'discount_price',
        'discount_end',
        'image_main',
        'quantity',
        'rating_count',
        'average_rating',
        'brand_id',
        'slug',
        'status'
    ];

    protected $attributes = [
        'discount_price' => 0,
        'discount_end' => null,
    ];

    public function image_list()
    {
        return $this->hasMany(Product_img_collection::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
