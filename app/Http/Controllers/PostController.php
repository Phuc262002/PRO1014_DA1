<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        $title = 'Pets Care - Blog';
        $posts = Post::with('category', 'user_post')->where('status',true)->paginate(9);
        return view('pages.client.blog', compact('title', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function getPosttDetail() {
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

    public function show(Post $post, $slug = null)
    {
        
        $post = Post::where('slug', $slug)->with('category', 'user_post', 'comments')->first();
        $title = 'Pets Care - '.$post->title;
        $comments = Comment::where([
            'post_id' => $post->id,
            'status' => 1
        ])->orderBy('created_at', 'desc')->with('user')->get();
        return view('pages.client.blog-details', compact('title', 'post', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
