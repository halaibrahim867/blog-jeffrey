<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Auth\Access\Gate;
use Illuminate\Validation\Rule;
use \Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        return view('posts.index', [
            'posts'=>post::latest()->filter(
                     request(['search','category','author'])
                )->paginate(6)->withQueryString(),
        ]);

    }

    public function show(Post $post)
    {
        return view('posts.show',[
            'post'=>$post
        ]);
    }

}
