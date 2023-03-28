<?php

namespace App\Http\Controllers\Admin\PostController;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.posts.index', ['posts' => $posts]);
    }
}
