<?php

namespace App\Http\Controllers\API;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $post = Post::create($request->all());
        return response()->json(['message'=> 'post created',
        'post' => $post]);
    }

    public function show(Post $post)
    {
        return $post;
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $post->update($request->all());
        
        return response()->json([
            'message' => 'post updated!',
            'post' => $post
        ]);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json([
            'message' => 'post deleted'
        ]);
        
    }
}
