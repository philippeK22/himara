<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontController::class,"home"])->name('home');

Route::get('/room', [FrontController::class,"room"])->name('room');

Route::get('/roomList', [FrontController::class,"roomList"])->name('roomList');

Route::get('/staff', [FrontController::class,"staff"])->name('staff');

Route::get('/gallery', [FrontController::class,"gallery"])->name('gallery');

Route::get('/contact', [FrontController::class,"contact"])->name('contact');

// Route::get('/guide', [FrontController::class,"styleGuide"])->name('styleGuide');

// Route::get('/button', [FrontController::class,"button"])->name('button');

// Route::get('/icons', [FrontController::class,"icons"])->name('icons');

Route::get('/booking', [FrontController::class,"booking"])->name('booking');

Route::get('/blog', [FrontController::class,"blog"])->name('blog');

Route::get('/events', [FrontController::class,"events"])->name('events');

Route::get('/EventsDetails', [FrontController::class,"eventdetails"])->name('eventdetails');

Route::get('/Loading', [FrontController::class,"loading"])->name('loading');

Route::get('/page', [FrontController::class,"page"])->name('page');

Route::get('/Service/home', [FrontController::class,"service"])->name('service');

Route::get('/BlogPost/{id}', [FrontController::class,"blogPost"])->name('blogLast');

Route::post('/search', [FrontController::class, "search"])->name('search');

Route::get('/CategorieId/{id}', [FrontController::class,"searchCategorie"])->name('blogCategorie');

Route::get('/TAGId/{id}', [FrontController::class,"tagCategorie"])->name('tagCategorie');

Route::get('/admin/dashboard', [FrontController::class,"admin"])->middleware(["auth"])->name('dashboard');

// admin back

Route::get('/admin/room', function () {
    return view('admin.room.main');
})->middleware(['auth'])->name('room.index');


Route::get('/admin/staff', function () {
    return view('admin.staff.main');
})->middleware(['auth'])->name('staff.index');


Route::get('/admin/blog', function () {
    return view('admin.blog.main');
})->middleware(['auth'])->name('blog.index');


Route::get('/admin/gallery', [GalleryController::class,"index"])->middleware(["auth"])->name('gallery.index');

route::get("/admin/gallery/create",[GalleryController::class,"create"])->name("images.create");

route::post("/admin/gallery/store",[GalleryController::class,"store"])->name("images.store");

Route::delete('admin/gallery/{image}/delete', [GalleryController::class,"destroy"])->name("images.destroy");

Route::get('/admin/contact', function () {
    return view('admin.contact.main');
})->middleware(['auth'])->name('contact.index');

// store pour le formulaire commentaire

Route::get("/comments/{id}/edit", [CommentController::class, "edit"]);
Route::post("/commentaires/{id}", [CommentController::class,"store"]);
Route::delete("/comments/{id}/delete", [CommentController::class, "destroy"]);
Route::put("/comments/{id}/update", [CommentController::class, "update"]);








Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
