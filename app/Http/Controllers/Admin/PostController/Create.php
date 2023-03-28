<?php

namespace App\Http\Controllers\Admin\PostController;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class Create extends Controller
{
    public function index(){
        return view('admin.posts.create');
    }

    public function store(Request $request){
        Post::create($request->validate([
            'title' => 'required|max:255',
            'content' => 'required|max:3000',
        ]));

        return redirect()->route('admin.posts.index');
    }
}
