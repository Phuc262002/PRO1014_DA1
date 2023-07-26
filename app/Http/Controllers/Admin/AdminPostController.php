<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Pets Care - Quản lý bài viết';
        $posts = Post::with('category', 'user_post')->paginate(10);
        return view('pages.admin.blog_manager', compact('title','posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Pets Care - Thêm Blog mới';
        $categories = Category::where(['type_category' => 'POST'])->get();
        return view('pages.admin.form_add_blog', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'img_post' => $request->img_post,
            'user_post_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'slug' => $request->slug,
        ]);


        if ($post) {
            if ($request->save_action == 'save_and_back') {
                return redirect()->route('post.index')->with('success', "Thêm Blog thành công.");
            } else if ($request->save_action == 'save_and_edit') {
                return back()->with('success', "Cập nhật Blog thành công.");
            } else if ($request->save_action == 'save_and_new') {
                return redirect()->route('post.create')->with('success', "Cập nhật Blog thành công.");
            }
        } else {
            return back()->with('error', "Cập nhật Blog thất bại.");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $title = 'Pets Care - '.$post->title;
        return view('pages.admin.blog_detail', compact('title', 'post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $title = 'Pets Care - Chỉnh sửa danh mục Blog';
        $categories = Category::where(['type_category' => 'POST'])->get();
        return view('pages.admin.edit_blog', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {
        $update_post = Post::updateOrCreate([
            'id' => $post->id
        ], [
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'img_post' => $request->img_post,
            'user_post_id' => $post->user_post_id,
            'category_id' => $request->category_id,
            'slug' => $request->slug,
        ]);

        if ($update_post) {
            if ($request->save_action == 'save_and_back') {
                return redirect()->route('post.index')->with('success', "Cập nhật Blog thành công.");
            } else if ($request->save_action == 'save_and_edit') {
                return back()->with('success', "Cập nhật Blog thành công.");
            } else if ($request->save_action == 'save_and_new') {
                return redirect()->route('post.create')->with('success', "Cập nhật Blog thành công.");
            }
        } else {
            return back()->with('error', "Cập nhật Blog thất bại.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        try {
            $delete_post = Post::destroy($post->id);

            if ($delete_post) {
                return back()->with('success', "Xóa bài Blog thành công.");
            } else {
                return back()->with('error', "Xóa bài Blog thất bại.");
            }
        } catch (\Exception $e) {
            return back()->with('error', "Đã xảy ra lỗi: " . $e->getMessage());
        }
    }
}