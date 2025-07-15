<?php

namespace App\Http\Controllers;

use App\Models\Post; 
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        Post::create($request->only(['title', 'content']));
        return redirect()->route('home');
    }

    public function show(Post $post)
    {
        $post->load('comments.replies');
        return view('posts.show', compact('post'));
    }
}
