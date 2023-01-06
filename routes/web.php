<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('{lang}/media-center', [App\Http\Controllers\CategoryController::class, 'mediacenter']);
Route::get('media/{slug}/', [App\Http\Controllers\PostController::class, 'showpost'])->name('showpost');
Route::get('about-us/{slug}/', [App\Http\Controllers\PageController::class, 'showpage'])->name('showpage');

Route::get('category/{slug}', [App\Http\Controllers\CategoryController::class, 'show']);

Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', [App\Http\Controllers\AdmincpController::class, 'index'])->name('home');
    Route::get('/admincp', [\App\Http\Controllers\AdmincpController::class, 'admincp'])->name('admincp');
    Route::resource('/admincp/category', \App\Http\Controllers\CategoryController::class);
    Route::resource('/admincp/posts', \App\Http\Controllers\PostController::class);
    Route::put('/admincp/announs/{announ}', [\App\Http\Controllers\AnnounController::class, 'removepdf'])->name('announs.removepdf');
    Route::resource('/admincp/announs', \App\Http\Controllers\AnnounController::class);
    Route::resource('/admincp/laporans', \App\Http\Controllers\LaporanController::class);
    Route::resource('/admincp/contacts', \App\Http\Controllers\ContactController::class);
    Route::resource('/admincp/pages', \App\Http\Controllers\PageController::class);
    Route::resource('/image', \App\Http\Controllers\ImageController::class);

    Route::resource('/doc', \App\Http\Controllers\DocController::class);
    Route::resource('/admincp/menu', \App\Http\Controllers\MenuController::class);

    Route::post('image/upload', [\App\Http\Controllers\HomeController::class, 'upload'])->name('image.upload');
    Route::post('/upload', [App\Http\Controllers\HomeController::class, 'tinimyce'])->name('upload');
    
});

Route::get('/share-price', function () {
    return view('frontend.shareprice');
});

Route::get('/financial-reports', [App\Http\Controllers\LaporanController::class, 'showlist']);

Route::get('/contact-us', function () {
    return view('frontend.contact');
});

Route::get('/esg/csr', function () {
    return view('frontend.csr');
});

// Route::get('/career', [App\Http\Controllers\HomeController::class, 'career'])->name('career');

Route::get('/publicoffering', function () {
    return view('frontend.publicoffering');
});

