<?php

namespace App\Http\Controllers;

use App\Models\Announs;
use App\Models\Post;
use App\Models\Report;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index()
    {
        $announs = Announs::all();
        $postpublish = Post::where('status', 'Publish')->where('type', 'Blog')->where('id_category', '!=', 3)->OrderBy('created_at', 'desc')->limit(6)->get();
        $laporans = Report::Orderby('date_gmt', 'desc')->where('status', 'Publish')->limit(4)->get();


        return view('welcome', [
            'announs' => $announs,
            'laporans' => $laporans,
            'postpublish' => $postpublish,

        ]);
    }

    public function mediacenter()
    {

        $post = Post::where('status', 'Publish')->where('type', 'Blog')->OrderBy('date', 'desc')->get();

        return view('frontend.mediacenter', [
            'blogs' => $post
        ]);
    }

    public function publicoffering()
    {
        $public = Report::Orderby('date_gmt', 'desc')->where('status', 'Publish')->where('category', 'Public Offering Prospectus')->limit(12)->get();
        return view('frontend.publicoffering', [
            'publicoffering' => $public
        ]);
    }
}
