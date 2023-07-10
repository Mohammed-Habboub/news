<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Blog::all();
        return response()->view('cms.blogs.index', ['blogs' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Blog::all();
        return response()->view('cms.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $isDestroyed = Blog::destroy($id);
        // return redirect()->back();
        if ($isDestroyed) {
            return response()->json(['icon' => 'success', 'title' => 'News deleted Successufly'], 200);
        } else {
            return response()->json(['icon' => 'error', 'title' => 'Failed to delete New'], 400);
        }
    }
}
