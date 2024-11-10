<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showPostCreateForm(): View
    {
        return view('post.postForm');
    }

    public function createPost(Request $request)
    {
//        $post = new Post();
//        $post->post_title = $request->post_title;
//        $post->post_content = $request->post_content;
//
//        $post->save();

        Post::create([
            'post_title' => $request->post_title,
            'post_content' => $request->post_content
        ]);

        return redirect('/')->with('message', 'Post Created Successfully');
    }
}
