<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class HomeBlogController extends Controller
{
    //
    public function index()
    {
        $blogs = Blog::latest()->take(4)->get();
        $comments = Comment::latest()->take(4)->get();
        $users = User::latest()->limit(5)->get();
        $categories = Category::latest()->take(2)->get();
        return view('news.front.blog', [
                'blogs' =>   $blogs,
                'comments' => $comments,
                'users'  =>$users,
                'categories' => $categories
            ]);
    }
}
