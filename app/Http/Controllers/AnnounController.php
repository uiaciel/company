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

        return view('admincp.announs.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('admincp.announs.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'title' => 'required|string|max:255',

        ]);

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
            $pdf = $request->file('pdf')->storeAs('pdf', $fileName, ['disk' => 'public']);
            $announ->pdf = $pdf;
        }

        $announ->status = $request->status;
        $announ->content = $request->content;
        $announ->save();

        return redirect()->route('announs.index')
            ->with('success', 'Announcement send successfully.');
    }

    public function edit(Announs $announ)
    {
        return view('admincp.announs.edit', compact('announ'));
    }

    public function show(Announs $announ)
    {
        return view('frontend.announcement', compact('announ'));
    }

    public function removepdf(Request $request, $id)
    {
        $announ = Announs::find($id);
        $announ->title = $request->title;
        $announ->slug = Str::slug($request->title);
        $announ->user_id = Auth::id();
        $announ->status = $request->status;
        $announ->content = $request->content;
        $announ->image = $request->image;
        $announ->pdf = '';
        $announ->update();

        return redirect()->back()
            ->with('success', 'Announcement File deleted successfully.');
    }

    public function update(Request $request, $id)
    {
        $announ = Announs::find($id);
        $announ->title = $request->title;
        $announ->slug = Str::slug($request->title);
        $announ->user_id = Auth::id();
        $announ->status = $request->status;
        $announ->content = $request->content;

        if ($request->hasfile('image')) {

            $nama = time() . '-' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', $nama, ['disk' => 'public']);
            $announ->image = $path;
        }


        if ($request->hasFile('pdf')) {

            $slugName = str_replace(' ', '_', $request->file('pdf')->getClientOriginalName());

            $fileName = time() . '_' . $slugName;
            $pdf = $request->file('pdf')->storeAs('pdf', $fileName, ['disk' => 'public']);
            $announ->pdf = $pdf;
        }

        $announ->update();

        return redirect()->back()
            ->with('success', 'Announcement updated successfully.');
    }

    public function destroy(Announs $announ)
    {
        //delete post
        $announ->delete();

        return redirect()->back()
            ->with('success', 'Announcement deleted successfully.');
    }
}
