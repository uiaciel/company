<?php

namespace App\Http\Controllers;

use App\Models\Announs;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AnnounController extends Controller
{
    public function index()
    {
        $posts = Announs::all();

        return view('announs.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('announs.create');
    }

    public function store(Request $request)
    {
        $announ = new Announs;
        $announ->title = $request->title;
        $announ->slug = Str::slug($request->title);
        $announ->user_id = Auth::id();

        if ($request->hasFile('images')) {
            $nama = time() . '-' . $request->file('images')->getClientOriginalName();
            $path = $request->file('images')->storeAs('images', $nama, ['disk' => 'public']);
            $announ->image = $path;
        }

        if ($request->hasFile('pdf')) {

            $slugName = str_replace(' ', '_', $request->file('pdf')->getClientOriginalName());

            $fileName = time() . '_' . $slugName;
            $pdf = $request->file('pdf')->storeAs('pdf', $nama, ['disk' => 'public']);
            $announ->pdf = $pdf;
        }

        $announ->status = $request->status;
        $announ->content = $request->content;
        $announ->save();

        return redirect()->back()
            ->with('success', 'Announcement send successfully.');
    }


    public function show(Post $post)
    {
        return view('announs.show', compact('post'));
    }
}
