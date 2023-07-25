<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryProductRequest;

class AdminCategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::where(['type_category' => 'PRODUCT'])->paginate(10);
        return view('pages.admin.list_product', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Pets Care - Thêm danh mục sản phẩm mới';
        return view('pages.admin.form_add_list_product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryProductRequest $request)
    {
        $category = Category::create($request->all());
        if ($category) {
            // if ($request->save_action == 'save_and_back') {
            //     return redirect()->route('category-product.index')->with('success', "Thêm danh mục sản phẩm thành công.");
            // } else if ($request->save_action == 'save_and_edit') {
            //     return back()->with('success', "Cập nhật danh mục sản phẩm thành công.");
            // } else if ($request->save_action == 'save_and_new') {
            //     return redirect()->route('category-product.create')->with('success', "Cập nhật danh mục sản phẩm thành công.");
            // }
            return redirect()->route('category-product.index')->with('success', "Thêm danh mục sản phẩm thành công.");
        } else {
            // return back()->with('error', "Cập nhật danh mục sản phẩm thất bại.");
            return redirect()->route('category-product.index')->with('error', "Thêm danh mục sản phẩm thất bại.");
        }



    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category, $category_product = null)
    {
        $title = 'Pets Care - Chỉnh sửa danh mục sản phẩm';
        $category = Category::find($category_product);
        return view('pages.admin.edit_category_product', compact('title', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryProductRequest $request, Category $category, $category_product = null)
    {
        $update_product_category = Category::updateOrCreate([
            'id' => $category_product
        ], $request->all());

        if ($update_product_category) {
            // if($request->save_action == 'save_and_back'){
            //     return redirect()->route('category-product.index')->with('success', "Cập nhật danh mục sản phẩm thành công.");
            // } else if ($request->save_action == 'save_and_edit'){
            //     return back()->with('success', "Cập nhật danh mục sản phẩm thành công.");
            // } else if ($request->save_action == 'save_and_new'){
            //   }
            return redirect()->route('category-product.index')->with('success', "Cập nhật danh mục sản phẩm thành công.");
        } else {
            return redirect()->route('category-product.index')->with('error', "Cập nhật danh mục sản phẩm thất bại.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category, $category_product = null)
    {
        try {
            $delete_category_product = Category::destroy($category_product);

            if ($delete_category_product) {
                return back()->with('success', "Xóa danh mục sản phẩm thành công.");
            } else {
                return back()->with('error', "Xóa danh mục sản phẩm thất bại.");
            }
        } catch (\Exception $e) {
            return back()->with('error', "Đã xảy ra lỗi: " . $e->getMessage());
        }
    }
}