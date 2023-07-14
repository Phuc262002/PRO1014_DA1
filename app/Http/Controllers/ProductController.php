<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Pets Care - Quản lý sản phẩm';
        $products = Product::with('brand', 'category', 'image_list')->paginate(10);
        return view('pages.admin.product_manager', compact('title', 'products'));
        // dd($products);
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
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $title = 'Pets Care - Chỉnh sửa sản phẩm';
        $brands = Brand::all();
        $categories = Category::where('type_category', '=', 'PRODUCT')->get();
        $id = $product->id;
        return view('pages.admin.edit_product', compact('title', 'product', 'brands', 'categories', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}