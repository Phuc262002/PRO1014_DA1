<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Http\Requests\ProductRequest;
use App\Models\Product_img_collection;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Pets Care - Quản lý sản phẩm';
        $products = Product::orderBy('created_at', 'desc')->with('brand', 'category', 'image_list')->paginate(10);
        return view('pages.admin.product_manager', compact('title', 'products'));
        // dd($products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        $categories = Category::where('type_category', '=', 'PRODUCT')->get();
        return view('pages.admin.form_add_product', compact('brands', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        if($request->discount_price > 0 && $request->discount_end == null){
            return back()->with('error', "Vui lòng nhập ngày kết thúc khuyến mãi.");
        }
        $product = Product::create($request->all());
        if ($request->image_main_list != 'Chưa có ảnh nào được chọn...') {
            $list_img = explode(',', $request->image_main_list);
            foreach ($list_img as $image) {
                Product_img_collection::create([
                    'product_id' => $product->id,
                    'image_collection' => $image,
                ]);
            }
        }
        if ($product) {
            if($request->save_action == 'save_and_back'){
                return redirect()->route('product.index')->with('success', "Thêm sản phẩm thành công.");
            } else if ($request->save_action == 'save_and_edit'){
                return redirect()->route('product.edit', $product->id)->with('success', "Thêm sản phẩm thành công.");
            } else if ($request->save_action == 'save_and_new'){
                return redirect()->route('product.create')->with('success', "Thêm sản phẩm thành công.");
            }
        } else {
            return back()->with('error', "Thêm sản phẩm thất bại.");
        }
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
        $product = Product::where('id', '=', $id)->with('brand', 'category', 'image_list')->first();
        return view('pages.admin.edit_product', compact('title', 'product', 'brands', 'categories', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $update_product = Product::updateOrCreate([
            'id' => $product->id,
        ], $request->all());
        if ($request->image_main_list != 'Chưa có ảnh nào được chọn...') {
            $list_img = explode(',', $request->image_main_list);
            foreach ($list_img as $image) {
                Product_img_collection::create([
                    'product_id' => $product->id,
                    'image_collection' => $image,
                ]);
            }
        }
        if ($update_product) {
            if($request->save_action == 'save_and_back'){
                return redirect()->route('product.index')->with('success', "Cập nhật sản phẩm thành công.");
            } else if ($request->save_action == 'save_and_edit'){
                return back()->with('success', "Cập nhật sản phẩm thành công.");
            } else if ($request->save_action == 'save_and_new'){
                return redirect()->route('product.create')->with('success', "Cập nhật sản phẩm thành công.");
            }
        } else {
            return back()->with('error', "Cập nhật sản phẩm thất bại.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        try {
            $delete_product = Product::destroy($product->id);

            if ($delete_product) {
                return back()->with('success', "Xóa sản phẩm thành công.");
            } else {
                return back()->with('error', "Xóa sản phẩm thất bại.");
            }
        } catch (\Exception $e) {
            return back()->with('error', "Đã xảy ra lỗi: " . $e->getMessage());
        }
    }

    public function destroyImgCollection(Request $request ,$id = null) {
        try {
            $delete_img = Product_img_collection::where([
                'product_id' => $id,
                'image_collection' => $request->image_collection,
            ])->delete();
            if ($delete_img) {
                return back()->with('success', "Xóa ảnh thành công.");
            } else {
                return back()->with('error', "Xóa ảnh thất bại.");
            }
        } catch (\Exception $e) {
            return back()->with('error', "Đã xảy ra lỗi: " . $e->getMessage());
        }
    }

}