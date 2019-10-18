<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function list()
    {
        return Post::all();
    }

    public function slug(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->first();

        return $post;
    }
}
