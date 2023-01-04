<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Spatie\PdfToImage\Pdf;

class LaporanController extends Controller
{
    public function index()
    {
        $posts = Laporan::OrderBy('date_gmt', 'desc')
            ->where('status', 'Publish')
            ->get();

        return view('laporans.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('laporans.create');
    }

    public function edit(Laporan $laporan)
    {
        return view('laporans.edit', compact('laporan'));
    }

    public function store(Request $request)
    {

        $originName = $request->file('files')->getClientOriginalName();
        $slugName = str_replace(' ', '_', $originName);

        $size = $request->file('files')->getSize();

        $fileName = time() . '_' . $slugName;
        $request->file('files')->move(public_path() . '/storage/files/', $fileName);

        $url = 'files/' . $fileName;



        $laporan = new Laporan;
        $laporan->user_id = Auth::id();
        $laporan->title = $request->title;
        $laporan->slug = Str::slug($request->title);
        $laporan->category = $request->category;
        $laporan->date_gmt = $request->date_gmt;
        $laporan->status = $request->status;
        $laporan->content = $request->content;
        $laporan->pdf = $url;
        $laporan->save();

        return redirect()->route('laporans.index')
            ->with('success', 'Report created successfully.');
    }



    public function showlist()
    {
        $laps = Laporan::OrderBy('date_gmt', 'desc')
            ->where('status', 'Publish')
            ->get();

        return view('frontend.report', [
            'laps' => $laps
        ]);

        return view('frontend.report');
    }
}
