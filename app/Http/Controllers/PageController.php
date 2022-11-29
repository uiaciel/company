<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::where('type', 'Page')->get();

        return view('pages.index', [
            'posts' => $posts
        ]);

    }

    public function create()
    {
        return view('pages.create');
    }

    public function show(Post $post)
    {
        return view('pages.show', compact('post'));
    }


}
