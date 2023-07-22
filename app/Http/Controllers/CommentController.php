<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        if(auth()->check()) {
            if($request->content != '') {
                $comment = new Comment();
                $comment->user_id = auth()->user()->id;
                $comment->post_id = $request->post_id;
                $comment->content = $request->content;
                $comment->save();

                $comment = Comment::where([
                    'post_id' => $request->post_id,
                    'status' => 1
                ])->orderBy('created_at', 'desc')->with('user');

                $transformedComments = array_map(function ($comment) {
                    return '<div class="blog-details-comment-wrapper m-b-30">
                                <div class="thumb">
                                    <img class="fit-image" src="' . $comment['user']['image'] . '"
                                        alt="' . $comment['user']['name'] . '">
                                </div>
                                <div class="content">
                                    <h4 class="title">' . $comment['user']['name'] . '</h4>
                                    <ul class="meta">
                                        <li>' . date('d/m/Y H:i',strtotime($comment['created_at'])) . '</li>
                                    </ul>
                                    <p>' . $comment['content'] . '</p>
                                </div>
                            </div>';
                }, $comment->get()->toArray());
                
                $script = '$("#comments_count").html('.count($comment->get()->toArray()).');$("#comments_container").html(`' . implode('', $transformedComments) . '`);';

                return [
                    'status' => 'success',
                    'message' => 'Bình luận của bạn đã được gửi thành công!',
                    'jsCode' => $script
                ];
            } else {
                return [
                    'status' => 'error',
                    'message' => 'Bạn cần nhập nội dung bình luận!',
                ];
            }
        } else {
            return [
                'error' => 'Bạn cần đăng nhập để thực hiện chức năng này!'
            ];
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
