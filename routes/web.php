<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CategorieImageController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\VideoController;
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

// CategorieImage
Route::get('/admin/categoryImage/', [CategorieImageController::class,"affichageCategoryImage"])->middleware(["auth"])->name('categoryImage.index');

route::get("/admin/categoryImage/create",[CategorieImageController::class,"create"])->name("categoryImage.create");

route::post("/admin/categoryImage/store",[CategorieImageController::class,"store"])->name("categoryImage.store");

Route::delete('/admin/categoryImage/{categories}/destroy', [CategorieImageController::class,"destroy"])->name("categoryImage.destroy");

route::get("/admin/categoryImage/{categories}/edit",[CategorieImageController::class,"edit"])->name("categories.edit");

route::put("/admin/categoryImage/{categories}/update",[CategorieImageController::class,"update"])->name("categories.update");

// store pour le formulaire commentaire

Route::get("/comments/{id}/edit", [CommentController::class, "edit"]);
Route::post("/comments/{id}/store", [CommentController::class,"store"]);
Route::delete("/comments/{id}/delete", [CommentController::class, "destroy"]);
Route::put("/comments/{id}/update", [CommentController::class, "update"]);

// Team

Route::get('/admin/staff', [StaffController::class,"affichage"])->middleware(["auth"])->name('team.index');

route::get("/admin/staff/create",[StaffController::class,"create"])->name("teams.create");

route::post("/admin/staff/store",[StaffController::class,"store"])->name("teams.store");

Route::delete('/admin/staff/{teams}/delete', [StaffController::class,"destroy"])->name("teams.destroy");

route::get("/admin/staff/{teams}/edit",[StaffController::class,"edit"])->name("teams.edit");

route::put("/admin/staf/teams/{teams}/updateindex",[StaffController::class,"update"])->name("teams.update");

//contact mail
Route::post('/mail/contact', [ContactController::class,"store"])->name('testmail');

//blog


route::post("/admin/blog/store",[ArticleController::class,"store"])->name("blogs.store");

route::get("/admin/blog/create",[ArticleController::class,"create"])->name("blogs.create");

route::get("/admin/blog/{blog}/edit",[ArticleController::class,"edit"])->name("blogs.edit");


route::put("/admin/blog/{blog}/update",[ArticleController::class,"update"])->name("blogs.update");


Route::get('/admin/blog', [ArticleController::class,"affichage"])->middleware(["auth"])->name('blog.index');

//Room crud

Route::get('/admin/room', [RoomController::class, "affichage"])->middleware(["auth"])->name('room.index');

route::get("/admin/room/create", [RoomController::class, "create"])->name("rooms.create");

route::post("/admin/room/store", [RoomController::class, "store"])->name("rooms.store");

route::get("/admin/room/{rooms}/edit", [RoomController::class, "edit"])->name("rooms.edit");

Route::delete('/admin/room/{rooms}/deleteRoom', [RoomController::class, "destroy"])->name("rooms.destroy");

route::put("/admin/room/{rooms}/update", [RoomController::class, "update"])->name("rooms.update");

Route::get('/pages/BOOK/BookRoom', [FrontController::class, "bookRoom"])->name('bookRoom');
// contact crud

Route::get('/admin/contact', [ContactController::class,"affichage"])->middleware(["auth"])->name('contact.index');


route::get("/admin/contact/{info}/edit",[ContactController::class,"edit"])->name("contacts.edit");


route::put("/admin/contact/{info}/update",[ContactController::class,"update"])->name("contacts.update");

//carousel

Route::get('/admin/carousel', [CarouselController::class, "affichage"])->middleware(["auth"])->name('carousel.index');
// edit
route::get("/admin/carousel/{carousel}/edit", [CarouselController::class, "edit"])->name("carousel.edit");
// update
route::put("/admin/carousel/{carousel}/update", [CarouselController::class, "update"])->name("carousel.update");


// videos

Route::get('/admin/video', [FrontController::class, "videosAffiche"])->middleware(["auth"])->name('video.index');
// // edit
route::get("/admin/video/{video}/edit",[VideoController::class,"edit"])->name("video.edit");
Route::put('/admin/video/update', [VideoController::class, "update"])->middleware(["auth"])->name('video.update');

//Reservation

Route::get('/admin/reservation', [ReservationController::class, "affichage"])->middleware(["auth"])->name('reservation.index');
Route::get('/admin/reservation/{id}/validate', [ReservationController::class, "update"])->middleware(["auth"])->name('reservation.update');


//affichage
Route::get('/dashboard/mailbox', [ContactController::class, "index"])->middleware(["auth"])->name('mailbox.index');
Route::get('/dashboard/mailbox/archives', [ContactController::class, "archives"])->middleware(["auth"])->name('mailbox.archive');
Route::get('/dashboard/mailbox/{id}/delete', [ContactController::class, "destroy"])->middleware(["auth"])->name('mailbox.destroy');
Route::get('/dashboard/mailbox/{id}/restore', [ContactController::class, "restore"])->middleware(["auth"])->name('mailbox.restore');


Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
