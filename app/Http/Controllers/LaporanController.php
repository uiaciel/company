<?php

namespace App\Http\Controllers;

use App\Models\Post;

class LaporanController extends Controller
{
    public function index()
    {
        $posts = Post::OrderBy('date_gmt', 'desc')
                ->where('status', 'Publish')
                ->where('type', 'Report')
                
                ->get();

        return view('laporans.index', [
            'posts' => $posts
        ]);

    }

    public function create()
    {
        return view('laporans.create');
    }

    public function show(Post $post)
    {
        return view('laporans.show', compact('post'));
    }

}
