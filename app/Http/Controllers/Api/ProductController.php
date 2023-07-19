<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product_data = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->discount_price > 0 ? $product->discount_price : $product->price,
            'price_original' => $product->price,
            'discount_price' => $product->discount_price,
            'image_main' => $product->image_main,
            'quantity' => 1,
            'in_stock' => $product->quantity,
            'slug' => $product->slug,

        ];
        
        return [
            'status' => 200,
            'data' => $product_data
        ];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
