<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title="Pets Care - Luôn đồng hành cùng thú cưng của bạn";
        $product = Product::paginate(12);
        return view('pages.client.shop' , compact('title','product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Product $product, $slug = null)
    {
        $product = Product::where('slug', $slug)->with('image_list', 'brand', 'category')->firstOrFail();
        $same_product = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->with('image_list', 'brand', 'category')->get();
        $title = "Pets Care - $product->name";
        return view('pages.client.product-detail', compact('product', 'title', 'same_product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
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
