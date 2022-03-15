<?php

use App\Http\Controllers\FrontController;
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






Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
