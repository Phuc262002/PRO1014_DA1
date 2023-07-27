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
        // $brands = Brand::query();
        $products = Product::orderBy('created_at', 'desc')->with('brand', 'category', 'image_list');
        $products_active = Product::orderBy('created_at', 'desc')->with('brand', 'category', 'image_list');
        $products_disable = Product::orderBy('created_at', 'desc')->with('brand', 'category', 'image_list');

        $status = request()->input('status') ? request()->input('status') : 'ALL';
        $search = request()->input('search');

        if ($search != '') {
            $products->where('name', 'like', "%$search%");
        }

        if ($status != 'ALL') {
            if ($status == 'ACTIVE') {
                $products->where('status', true);
            } else if ($status == 'INACTIVE') {
                $products->where('status', false);
            }
        }

        $products = $products->paginate(10);


        // $products = Product::orderBy('created_at', 'desc')->with('brand', 'category', 'image_list')->paginate(10);
        return view('pages.admin.product_manager', compact('title', 'products', 'search', 'status', 'products_active', 'products_disable'));
        // dd($products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Pets Care - Thêm sản phẩm mới';
        $brands = Brand::all();
        $categories = Category::where('type_category', '=', 'PRODUCT')->get();
        return view('pages.admin.form_add_product', compact('title', 'brands', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        if ($request->discount_price > 0 && $request->discount_end == null) {
            return back()->with('error', "Vui lòng nhập ngày kết thúc khuyến mãi.");
        } else if ($request->discount_price == 0 && $request->discount_end != null) {
            return back()->with('error', "Vui lòng nhập giá khuyến mãi.");
        } else if ($request->discount_price > 0 && $request->discount_end != null) {
            if ($request->discount_price >= $request->price) {
                return back()->with('error', "Giá khuyến mãi phải nhỏ hơn giá gốc.");
            } else if ($request->discount_end <= date('Y-m-d')) {
                return back()->with('error', "Ngày kết thúc khuyến mãi phải lớn hơn ngày hiện tại.");
            }
        }
        if ($request->image_main == 'Chưa có ảnh nào được chọn...') {
            return back()->with('error', "Vui lòng chọn ảnh chính.");
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
            if ($request->save_action == 'save_and_back') {
                return redirect()->route('product.index')->with('success', "Thêm sản phẩm thành công.");
            } else if ($request->save_action == 'save_and_edit') {
                return redirect()->route('product.edit', $product->id)->with('success', "Thêm sản phẩm thành công.");
            } else if ($request->save_action == 'save_and_new') {
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
        $title = 'Pets Care - Chi tiết sản phẩm';
        $products = Product::where('id', $product->id)->with('brand', 'category', 'image_list')->paginate(10);
        return view('pages.admin.product_detail', compact('title', 'product'));
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
        if ($request->discount_price > 0 && $request->discount_end == null) {
            return back()->with('error', "Vui lòng nhập ngày kết thúc khuyến mãi.");
        } else if ($request->discount_price == 0 && $request->discount_end != null) {
            return back()->with('error', "Vui lòng nhập giá khuyến mãi.");
        } else if ($request->discount_price > 0 && $request->discount_end != null) {
            if ($request->discount_price >= $request->price) {
                return back()->with('error', "Giá khuyến mãi phải nhỏ hơn giá gốc.");
            } else if ($request->discount_end <= date('Y-m-d')) {
                return back()->with('error', "Ngày kết thúc khuyến mãi phải lớn hơn ngày hiện tại.");
            }
        }
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
            if ($request->save_action == 'save_and_back') {
                return redirect()->route('product.index')->with('success', "Cập nhật sản phẩm thành công.");
            } else if ($request->save_action == 'save_and_edit') {
                return back()->with('success', "Cập nhật sản phẩm thành công.");
            } else if ($request->save_action == 'save_and_new') {
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
                return redirect()->route('product.index')->with('success', "Xóa sản phẩm thành công.");
            } else {
                return redirect()->route('product.index')->with('error', "Xóa sản phẩm thất bại.");
            }
        } catch (\Exception $e) {
            return back()->with('error', "Đã xảy ra lỗi: Hiện sản phẩm này không thể xóa. Bạn vui lòng thay đổi trạng thái sản phẩm thành DISABLED.");
        }
    }

    public function destroyImgCollection(Request $request, $id = null)
    {
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
            return back()->with('error', "Đã xảy ra lỗi: Hiện ảnh này không thể xóa.");
        }
    }
}