<?php

namespace App\Http\Controllers;

use App\Models\Doc;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('type', 'blog')->orderBy('created_at', 'desc')->get();

        return view('admincp.posts.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('admincp.posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date_gmt' => 'required',
            'lang' => 'required',
            'status' => 'required',
            'type' => 'required',
            // 'images' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $post = new Post;
        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->content = $request->content;

        if ($request->except == NULL) {
            $post->excerpt = Str::of($request->content)->words(30, ' ....');
        } else {
            $post->excerpt = $request->excerpt;
        }

        $post->lang = $request->lang;
        $post->layout = $request->layout;
        $post->id_category = $request->id_category;
        $post->date_gmt = $request->date_gmt;
        $post->status = $request->status;
        $post->type = $request->type;
        $post->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imagefile) {
                $image = new Image;
                $nama = time() . '-' . $imagefile->getClientOriginalName();
                $path = $imagefile->storeAs('images', $nama, ['disk' => 'public']);
                $image->path = $path;
                $image->name = $request->name;
                $image->caption = $request->caption;
                $image->post_id = $post->id;
                $image->save();
            }
        }

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $docfile) {

                $originName = $docfile->getClientOriginalName();
                $slugName = str_replace(' ', '_', $originName);
                // $extension = $docfile->getClientOriginalExtension();
                $size = $docfile->getSize();

                $fileName = time() . '_' . $slugName;
                $docfile->move(public_path() . '/storage/files/', $fileName);
                // $docfile->move(public_path('files'), $fileName);
                $url = 'public/files/' . $fileName;

                // $ext = $docfile->getClientOriginalExtension();
                // $size = $docfile->getSize();
                // $mime = $docfile->getMimeType();

                $doc = new Doc;
                $doc->path = $url;
                $doc->name = $originName;
                $doc->filesize = $size;
                $doc->post_id = $post->id;
                $doc->save();
            }
        }

        if ($request->type == 'Blog') {
            return redirect()->route('posts.index')
                ->with('success', 'Annoucement created successfully.');
        }

        if ($request->type == 'Page') {
            return redirect()->route('pages.index')
                ->with('success', 'Page created successfully.');
        }

        if ($request->type == 'Report') {
            return redirect()->route('laporans.index')
                ->with('success', 'Report created successfully.');
        }
    }

    public function show(Post $post)
    {
        return view('admincp.posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('admincp.posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imagefile) {
                $image = new Image;
                $nama = time() . '-' . $imagefile->getClientOriginalName();
                $path = $imagefile->storeAs('images', $nama, ['disk' => 'public']);
                $image->path = $path;
                $image->name = $request->name;
                $image->caption = $request->caption;
                $image->post_id = $id;
                $image->save();
            }
        }

        $post = Post::find($id);
        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->content = $request->content;
        if ($request->except == NULL) {
            $post->excerpt = Str::of($request->content)->words(30, ' ....');
        } else {
            $post->excerpt = $request->excerpt;
        }
        $post->lang = $request->lang;
        $post->id_category = $request->id_category;
        $post->date_gmt = $request->date_gmt;
        $post->status = $request->status;
        $post->type = $request->type;
        $post->update();

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $docfile) {


                $nama = time() . '-' . $docfile->getClientOriginalName();

                // $ext = $docfile->getClientOriginalExtension();
                $size = $docfile->getSize();
                // $mime = $docfile->getMimeType();

                $doc = new Doc;
                $docpath = Storage::putFileAs('files', $docfile, $nama, ['disk' => 'public']);
                $doc->path = $docpath;
                $doc->name = $nama;
                $doc->filesize = $size;
                $doc->post_id = $id;
                $doc->save();
            }
        }

        if ($request->type == 'Blog') {
            return redirect()->route('posts.index')
                ->with('success', 'Annoucement updated successfully.');
        }

        if ($request->type == 'Page') {
            return redirect()->route('pages.index')
                ->with('success', 'Page updated successfully.');
        }

        if ($request->type == 'Report') {
            return redirect()->route('laporans.index')
                ->with('success', 'Report updated successfully.');
        }
    }

    public function destroy(Post $post)
    {
        //delete post
        $post->delete();

        if ($post->type == 'Blog') {
            return redirect()->route('posts.index')
                ->with('success', 'Data Berhasil Dihapus!');
        }

        if ($post->type == 'Page') {
            return redirect()->route('pages.index')
                ->with('success', 'Data Berhasil Dihapus!');
        }

        if ($post->type == 'Report') {
            return redirect()->route('laporans.index')
                ->with('success', 'Data Berhasil Dihapus!');
        }
    }

    public function showpost($slug)
    {
        $post = Post::with('category')->where('slug', $slug)->where('type', 'Blog')->first();


        return view('frontend.artikel', [
            'post' => $post
        ]);
    }

    // public function article($slug)
    // {
    //     $post = Post::where('slug_en', $slug)->first();

    //     return view('frontend.article', [
    //         'post' => $post
    //     ]);
    // }
}
