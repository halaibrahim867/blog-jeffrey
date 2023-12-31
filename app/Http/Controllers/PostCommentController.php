<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{
    public function store(Post $post)
    {

        request()->validate([
            'body'=>'required'
        ]);

        $post->comments()->create([
            'user_id'=>request()->user()->id,
            'body'=> request('body'),
        ]);

        return redirect()->back();
    }

    public function create()
    {
        return view('posts.create');
    }
}
