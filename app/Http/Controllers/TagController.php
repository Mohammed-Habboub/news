<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Tag::all();
        return response()->view('cms.tags.index', ['tags' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = Tag::all();
        return response()->view('cms.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name' => 'required|string|min:3|max:25',
            'slug'  => 'required|string|min:3|max:25',
        ], [
            'name.required' => 'Please, enter the title',
            'slug.required' => 'Please, enter the title'
        ]);
        $tag = new Tag();
        $tag->name = $request->get('name');
        $tag->slug = $request->get('slug');
        $isSaved = $tag->save();

        session()->flash('message', $isSaved ? 'Tag to created Successfuly' : 'Falied created Tag');
        return redirect()->back();
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
        $tag = Tag::findOrFail($id);
        return response()->view('cms.tags.edit',['tag' => $tag]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required|string|min:3|max:25',
            'slug'  => 'required|string|min:3|max:25',
        ]);

        $tag = Tag::findOrFail($id);
        $tag->name = $request->get('name');
        $tag->slug = $request->get('slug');
        $isSaved = $tag->save();


        return redirect()->route('tags.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $isDestroyed = Tag::destroy($id);
        // return redirect()->back();
        if ($isDestroyed) {
            return response()->json(['icon' => 'success', 'title' => 'Tag deleted Successufly'], 200);
        } else {
            return response()->json(['icon' => 'error', 'title' => 'Failed to delete Tag'], 400);
        }
    }
}
