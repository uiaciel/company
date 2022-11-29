<?php

namespace App\Http\Controllers;

use App\Models\Post;

class AnnounController extends Controller
{
    public function index()
    {
        $posts = Post::where('type', 'Announ')->get();

        return view('announs.index', [
            'posts' => $posts
        ]);

    }

    public function create()
    {
        return view('announs.create');
    }

    public function show(Post $post)
    {
        return view('announs.show', compact('post'));
    }
}
