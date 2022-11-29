<?php

namespace App\Http\Controllers;

use App\Models\Doc;
use Illuminate\Http\Request;

class AdmincpController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $file = Doc::All();
        
        return view('frontend.index',[
            
            'docs' => $file
            
            ]);
    }

    public function admincp()
    {
        return view('admincp.index');
    }
}
