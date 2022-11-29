<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function blog()
    {
        $blogs = Post::where('id_category', 1)->get();
        return view('frontend.blog', [
            'blogs' => $blogs
        ]);
    }
    public function career()
    {
        $blogs = Post::where('status', 'Publish')->where('type', 'Career')->get();
        return view('frontend.career', [
            'blogs' => $blogs
        ]);
    }
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->move(public_path('images'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/' . $fileName);
            $msg = 'Image successfully uploaded';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
    public function tinimyce(Request $request)
    {
        $originName = $request->file('file')->getClientOriginalName();
        $slugName = str_replace(' ', '_', $originName);
        $fileName = time() . '_' . $slugName;
        $request->file('file')->move(public_path() . '/storage/uploads/', $fileName);
        return response()->json(['location' => "/storage/uploads/$fileName"]);
    }
}
