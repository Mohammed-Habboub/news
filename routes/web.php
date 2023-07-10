<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/about', function () {
//     return view('news.about');
// });

Route::get('/', function () {
    return view('cms.layouts.parant');
});

// Route to Admins
// Actions to categories
Route::prefix('cms/admin')->group(function () {
    Route::resource('categories', CategoryController::class);
});

// Actions to tags
Route::prefix('cms/admin')->group(function () {
    Route::resource('tags', TagController::class);
});

// Actions to news
Route::prefix('cms/admin')->group(function () {
    Route::resource('events', EventController::class);
});

// Actions to blogs
Route::prefix('cms/admin')->group(function () {
    Route::resource('blogs', BlogController::class);
});

// Actions to comments
Route::prefix('cms/admin')->group(function () {
    Route::resource('comments', CommentController::class);
});

// Actions to Users
Route::prefix('cms/admin')->group(function () {
    Route::resource('users', UserController::class);
});

// Route to Users
Route::prefix('app')->group(function () {
    Route::view('/', 'news.index')->name('news.index');
    Route::view('/about', 'news.about')->name('news.about');
    Route::view('/blog', 'news.blog')->name('news.blog');
    Route::view('/detailes', 'news.blog_details')->name('news.blog_details');
    Route::view('/categori', 'news.categori')->name('news.categori');
    Route::view('/contact', 'news.contact')->name('news.contact');
    Route::view('/elements', 'news.elements')->name('news.elements');
    Route::view('/latest', 'news.latest_news')->name('news.latest');
    Route::view('/main', 'news.main')->name('news.main');
});

