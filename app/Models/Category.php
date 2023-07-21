<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'description',
        'type_category',
        'slug'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}