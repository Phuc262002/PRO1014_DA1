<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class AdminCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $title = 'Pets Care - Quản lý bình luận';
            $comment = Comment::with('user','post');
            $status = request()->query('status');
            $search = request()->input('search');



            if ($search != '') {
                $comment->whereHas('post', function ($query) use ($search) {
                    $query->where('title', 'like', "%$search%");
                });
            }
            if ($status && $status !== 'ALL') {
                if ($status === 'INACTIVE') {
                    $comment = $comment->where(['status' => false]);
                } else if ($status === 'ACTIVE') {
                    $comment = $comment->where(['status' => true]);
                }
            }
            $comment = $comment->orderBy('created_at', 'DESC')->paginate(10)->withQueryString();


            return view('pages.admin.comment_manager',compact('title','comment','status','search'));

            

           
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
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $update_comment = Comment::updateOrCreate([
            'id' => $comment->id,
        ], $request->all());
        if ($update_comment) {
            return back()->with('success', "Cập nhật tài khoản thành công.");

        } else {
            return back()->with('error', "Cập nhật tài khoản thất bại.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        {
            try {
                $delete_comment = Comment::destroy($comment->id);
    
                if ($delete_comment) {
                    return back()->with('success', "Xóa thành công.");
                } else {
                    return back()->with('error', "Xóa thất bại.");
                }
            } catch (\Exception $e) {
                return back()->with('error', "Đã xảy ra lỗi: " . $e->getMessage());
            }
        }
    }
}
