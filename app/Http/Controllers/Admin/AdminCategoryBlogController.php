<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::where(['type_category' => 'POST'])->paginate(10);
        return view('pages.admin.list_blog', compact('categories'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Pets Care - Thêm danh mục sản phẩm mới';
        return view('pages.admin.form_add_list_blog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = Category::create($request->all());
        if ($category) {
            if($request->save_action == 'save_and_back'){
                return redirect()->route('category-blog.index')->with('success', "Cập nhật sản phẩm thành công.");
            } else if ($request->save_action == 'save_and_edit'){
                return back()->with('success', "Cập nhật sản phẩm thành công.");
            } else if ($request->save_action == 'save_and_new'){
                return redirect()->route('category-blog.create')->with('success', "Cập nhật sản phẩm thành công.");
            }
        } else {
            return back()->with('error', "Cập nhật sản phẩm thất bại.");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category, $category_blog = null)
    {
        $title = 'Pets Care - Chỉnh sửa danh mục blog';
        $category = Category::find($category_blog);
        return view('pages.admin.edit_category_blog', compact('title', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category, $category_blog = null)
    {
        $update_blog_category = Category::updateOrCreate([
            'id' => $category_blog
        ], $request->all());

        if ($update_blog_category) {
            if($request->save_action == 'save_and_back'){
                return redirect()->route('category-blog.index')->with('success', "Cập nhật sản phẩm thành công.");
            } else if ($request->save_action == 'save_and_edit'){
                return back()->with('success', "Cập nhật sản phẩm thành công.");
            } else if ($request->save_action == 'save_and_new'){
                return redirect()->route('category-blog.create')->with('success', "Cập nhật sản phẩm thành công.");
            }
        } else {
            return back()->with('error', "Cập nhật sản phẩm thất bại.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category, $category_blog = null)
    {
        try {
            $delete_category_blog = Category::destroy($category_blog);

            if ($delete_category_blog) {
                return back()->with('success', "Xóa sản phẩm thành công.");
            } else {
                return back()->with('error', "Xóa sản phẩm thất bại.");
            }
        } catch (\Exception $e) {
            return back()->with('error', "Đã xảy ra lỗi: " . $e->getMessage());
        }
    }
    
}