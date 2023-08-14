<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeBlogController;
use App\Http\Controllers\HomeCategoryController;
use App\Http\Controllers\HomeCommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


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

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/app', [HomeController::class, 'index'])
        ->middleware(['auth'])
        ->name('news.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';






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

// Route::get('/', function () {
//     return view('cms.layouts.parant');
// });
// Route::get('/', function () {
//     return view('index');
// });

// Route to Admins
Route::prefix('cms/admin')->group(function () {
    Route::view('/', 'cms.layouts.parant')->name('dashboard');
});

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

Route::prefix('cms/admin')->group(function () {
    Route::view('/edit-account-info', 'cms.profile.edit-account-info')->name('profile');;
});

// Route to Users
Route::prefix('app')->group(function () {



    Route::view('/about', 'news.front.about')->name('news.about');

    Route::get('/blog', [HomeBlogController::class, 'index'])->name('news.blog');
    // Route::post('/blogs', [HomeCommentController::class, 'store'])->name('news.comment');

    Route::get('/blogs/{blog}/comments', [HomeCommentController::class, 'index']);
    Route::post('/blogs/{blog}/comments', [HomeCommentController::class, 'store'])->name('news.comment');

    Route::post('/like-post/{blog}', [HomeCommentController::class, 'likeBlog'])->name('blog.like');

    Route::view('/detailes', 'news.front.blog_details')->name('news.blog_details');

    Route::get('/categori', [HomeCategoryController::class, 'index'])->name('news.categori');

    Route::get('/contact', [ContactController::class, 'index'])->name('news.contact');
    Route::post('/contact', [ContactController::class, 'store']);

    Route::view('/elements', 'news.front.elements')->name('news.elements');
    Route::view('/latest', 'news.front.latest_news')->name('news.latest');
    Route::view('/main', 'news.front.main')->name('news.main');
});




