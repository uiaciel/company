<?php

namespace App\Http\Controllers;

use App\Models\Doc;
use App\Models\Image;
use App\Models\Menu;
use App\Models\Menulink;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        $posts = Page::All();

        return view('admincp.pages.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        $allmenu = Menu::all();

        return view('admincp.pages.create', [
            'menus' => $allmenu
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required',
            'lang' => 'required',
            'status' => 'required',

            // 'images' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $post = new Page;
        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->content = $request->content;

        // if ($request->excerpt == NULL) {
        //     $post->excerpt = Str::of($request->content)->words(30, ' ....');
        // } else {
        //     $post->excerpt = $request->excerpt;
        // }

        $post->lang = $request->lang;
        // $post->layout = 'Full';
        // $post->id_menu = $request->id_menu;
        $post->date = $request->date;
        $post->status = $request->status;
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

        $item = new Menulink;
        $item->menu_id = $request->menu_id;
        $item->title = $request->title;
        $item->parent = 0;
        $item->order = 0;
        $item->link = $post->slug;
        $item->save();

        return redirect()->route('pages.index')
            ->with('success', 'Page created successfully.');
    }


    public function edit(Page $page)
    {
        return view('admincp.pages.edit', compact('page'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = Page::find($id);
        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->content = $request->content;

        $post->lang = $request->lang;
        $post->id_menu = $request->id_menu;
        $post->date = $request->date;
        $post->status = $request->status;

        $post->update();

        return redirect()->route('pages.index')
            ->with('success', 'Page updated successfully.');
    }

    public function showpage($slug)
    {


        // $lang = Menu::where('lang', $lang)->get();
        $post = Page::where('slug', $slug)
            ->first();

        // $lang = $post->lang;

        return view('frontend.page', [
            'post' => $post,

        ]);
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return redirect()->route('pages.index')
            ->with('success', 'Data Berhasil Dihapus!');
    }
}
