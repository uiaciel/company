<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Spatie\PdfToImage\Pdf;

class ReportController extends Controller
{
    public function index()
    {
        $posts = Report::OrderBy('date_gmt', 'desc')

            ->get();

        return view('admincp.reports.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('admincp.reports.create');
    }

    public function edit(Report $laporan)
    {
        return view('admincp.reports.edit', compact('laporan'));
    }

    public function store(Request $request)
    {

        $originName = $request->file('files')->getClientOriginalName();
        $slugName = str_replace(' ', '_', $originName);
        $fileName = time() . '_' . $slugName;
        $request->file('files')->move(public_path() . '/storage/files/', $fileName);

        $url = 'files/' . $fileName;

        $originimages = $request->file('images')->getClientOriginalName();
        $slugimages = str_replace(' ', '_', $originimages);
        $fileimages = time() . '_' . $slugimages;
        $request->file('images')->move(public_path() . '/storage/files/', $fileimages);

        $urlimages = 'files/' . $fileimages;

        // $pdf = new Pdf(public_path() . '/storage/files/', $fileName);
        // $coverpath = public_path('/storage/files/');
        // $thumbnail = $pdf->setPage(1)
        //     ->setOutputFormat('png')
        //     ->saveImage($coverpath . $fileName . 'png');

        $laporan = new Report;
        $laporan->user_id = Auth::id();
        $laporan->title = $request->title;
        $laporan->slug = Str::slug($request->title);
        $laporan->category = $request->category;
        $laporan->date_gmt = $request->date_gmt;
        $laporan->status = $request->status;
        $laporan->content = $request->content;
        $laporan->image = $urlimages;
        $laporan->pdf = $url;
        $laporan->save();

        return redirect()->route('reports.index')
            ->with('success', 'Report created successfully.');
    }

    public function update(Request $request, $id)
    {

        $laporan = Report::find($id);
        $laporan->user_id = Auth::id();
        $laporan->title = $request->title;
        $laporan->slug = Str::slug($request->title);
        $laporan->category = $request->category;
        $laporan->date_gmt = $request->date_gmt;
        $laporan->status = $request->status;
        $laporan->content = $request->content;

        if ($request->hasFile('files')) {
            $originName = $request->file('files')->getClientOriginalName();
            $slugName = str_replace(' ', '_', $originName);

            $size = $request->file('files')->getSize();

            $fileName = time() . '_' . $slugName;
            $request->file('files')->move(public_path() . '/storage/files/', $fileName);

            $url = 'files/' . $fileName;
            $laporan->pdf = $url;
        }

        $laporan->save();

        return
            redirect()->route('reports.index')

            ->with('success', 'Report updated successfully.');
    }

    public function showlist()
    {

        $annualfeature = Report::OrderBy('date_gmt', 'desc')
            ->where('status', 'Publish')
            ->where('category', 'Annual Report')
            ->get();

        $laps = Report::OrderBy('date_gmt', 'desc')
            ->where('status', 'Publish')
            ->get();

        return view('frontend.report', [
            'laps' => $laps,
            'annuals' => $annualfeature
        ]);
    }

    public function destroy(Report $report)
    {
        $report->delete();

        return redirect()->route('reports.index')
            ->with('success', 'Data Berhasil Dihapus!');
    }
}
