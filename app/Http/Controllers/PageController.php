<?php

namespace App\Http\Controllers;


use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::where('type', 'Page')->get();

        return view('admincp.pages.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('admincp.pages.create');
    }

    public function edit(Post $page)
    {
        return view('admincp.pages.edit', compact('page'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = Post::find($id);
        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->content = $request->content;

        $post->lang = $request->lang;
        $post->id_category = $request->id_category;
        $post->date_gmt = $request->date_gmt;
        $post->status = $request->status;
        $post->type = $request->type;
        $post->update();



        return redirect()->route('pages.index')
            ->with('success', 'Page updated successfully.');
    }
    
    public function showpage($slug)
    {
        $post = Post::where('slug', $slug)->where('type', 'Page')->first();

        return view('frontend.page', [
            'post' => $post
        ]);
    }
}
