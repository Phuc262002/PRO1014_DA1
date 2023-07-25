<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products_all = Product::all();

        foreach ($products_all as $product) {
            if ($product->discount_end <= date('Y-m-d h:i:s')) {
                $product->discount_price = 0;
                $product->discount_end = null;
                $product->save();
            }
        }
        

        $title = "Pets Care - Luôn đồng hành cùng thú cưng của bạn";
        $categories = Category::where('type_category', 'PRODUCT')->with('product')->get();
        $query = request()->query();

        $category = isset($query['category']) ? $query['category'] : null;
        $search = isset($query['search']) ? $query['search'] : '';

        $filter = isset($query['filter']) ? $query['filter'] : 'filter_default';

        $productQuery = Product::with('image_list', 'brand', 'category');

        // Apply category filter if provided
        if ($category) {
            $productQuery->whereHas('category', function ($q) use ($category) {
                $q->where('slug', $category);
            });
        }

        // Apply search filter if provided
        if ($search) {
            $productQuery->where('name', 'like', "%$search%");
        }

        // Apply sorting filters
        switch ($filter) {
            case 'filter_Az':
                $productQuery->orderBy('price', 'asc');
                break;
            case 'filter_Za':
                $productQuery->orderBy('price', 'desc');
                break;
            case 'filter_newest':
                $productQuery->orderBy('created_at', 'desc');
                break;
            case 'filter_oldest':
                $productQuery->orderBy('created_at', 'asc');
                break;
            default:
                $productQuery->orderBy('created_at', 'desc');
                break;
        }

        $product = $productQuery->with('image_list', 'brand', 'category')->paginate(12);

        return view('pages.client.shop', compact('title', 'product', 'categories', 'search', 'category', 'filter'));
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
        $title = "Pets Care - Luôn đồng hành cùng thú cưng của bạn";
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
