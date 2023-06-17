<?php

use App\Http\Controllers\AdmincpController;
use App\Http\Controllers\AnnounController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('homepages');
Route::get('/announcements/{slug}', [AnnounController::class, 'show'])->name('announs.frontpage');
Route::get('/prospektus', [HomeController::class, 'publicoffering']);
Route::get('/share-price', function () {
    return view('frontend.shareprice');
});

Auth::routes();
Route::group(['middleware' => ['auth', 'can:isAdmin']], function () {

    Route::get('/admincp', [AdmincpController::class, 'index'])->name('admincp.index');
    Route::resource('/admincp/category', \App\Http\Controllers\CategoryController::class)->except('create', 'edit');
    Route::resource('/admincp/posts', \App\Http\Controllers\PostController::class);
    Route::resource('/admincp/contacts', \App\Http\Controllers\ContactController::class);
    Route::resource('/admincp/menus', \App\Http\Controllers\MenuController::class);
    // Route::resource('/admincp/menulinks', \App\Http\Controllers\MenuController::class);
    Route::resource('/admincp/announs', \App\Http\Controllers\AnnounController::class);
    Route::resource('/admincp/reports', \App\Http\Controllers\ReportController::class);
    Route::resource('/admincp/pages', \App\Http\Controllers\PageController::class);
    Route::post('/upload', [App\Http\Controllers\AdmincpController::class, 'tinymce'])->name('upload');

    Route::post('/updates', [App\Http\Controllers\MenuController::class, 'updates'])->name('updates');
    Route::resource('/admincp/images', \App\Http\Controllers\ImageController::class);
    Route::post('/admincp/stores', [App\Http\Controllers\MenuController::class, 'stores'])->name('menus.stores');
});

Route::get('/financial-reports', [App\Http\Controllers\ReportController::class, 'showlist']);
Route::get('/contact-us', [App\Http\Controllers\FrontendController::class, 'contact']);
Route::post('/contact-us/post', [App\Http\Controllers\FrontendController::class, 'contactpost'])->name('contactpost');

Route::get('/media/{slug}/', [App\Http\Controllers\PostController::class, 'showpost'])->name('showpost');
Route::get('/{slug}', [App\Http\Controllers\PageController::class, 'showpage'])->name('showpage');

Route::get('/category/{slug}', [App\Http\Controllers\CategoryController::class, 'show']);
Route::get('{lang}/media-center', [App\Http\Controllers\HomeController::class, 'mediacenter']);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
