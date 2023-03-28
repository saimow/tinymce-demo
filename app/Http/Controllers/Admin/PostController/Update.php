<?php

namespace App\Http\Controllers\Admin\PostController;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class Update extends Controller
{
    public function index(Post $post){
        return view('admin.posts.update', ['post' => $post ]);
    }

    public function update(Post $post, Request $request){
        $post->update($request->validate([
            'title' => 'required|max:255',
            'content' => 'required|max:3000',
        ]));

        return redirect()->route('admin.posts.index');
    }
}
