<?php

namespace App\Http\Controllers\Admin\PostController;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class Delete extends Controller
{
    public function destroy(Request $request){
        Post::where('id', $request->id)->delete();

        return redirect()->route('admin.posts.index');
    }
}
