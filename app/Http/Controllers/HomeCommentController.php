<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeCommentController extends Controller
{
    public function index($blog_id)
    {
        // Retrieve all comments for a specific blog
        $comments = Comment::where('blog_id', $blog_id)->get();
        $data = User::all();
        return response()->view('news.front.blog', ['users' => $data, 'comments' => $comments]);


        //return view('news.front.blog', compact('comments'));
    }
    public function store(Request $request,$id)
    {

        $comment = new Comment();
        $comment->content = $request->get('body');
        $comment->user_id = $id;
        $comment->blog_id = $id;
        $isSaved = $comment->save();


        return redirect()->back();

    }

    public function likeBlog($blog)
    {
        // Check if user already liked the blog or not
        $user = Auth::user();
        $likeBlog = $user->likedBlogs()->where('blog_id', $blog)->count();
        if ($likeBlog == 0) {
            $user->likedBlogs()->attach($blog);
        } else {
            $user->likedBlogs()->detach($blog);
        }
        return redirect()->back();
    }
}
