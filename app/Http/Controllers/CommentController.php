<?php

namespace App\Http\Controllers;

use App\Models\Comment; 
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'post_id' => 'required|exists:posts,id',
            'parent_comment_id' => 'nullable|exists:comments,id'
        ]);

        try {
            Comment::create($request->only(['content', 'post_id', 'parent_comment_id']));
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Comment depth exceeded.']);
        }

        return back();
    }
}
