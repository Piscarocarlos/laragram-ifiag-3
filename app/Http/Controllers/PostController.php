<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,svg,gif,jpeg,avif,webp'
        ]);

        $post = new Post();

        if (!is_null($request->content)) {
            $post->content = $request->content;
        }
        $post->image = $request->file('image')->store("uploads/posts");
        $post->user_id = Auth::id(); // auth()->id() // Auth::user()->id
        $post->save();

        return back();
    }
}
