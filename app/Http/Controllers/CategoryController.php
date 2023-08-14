<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (!Gate::denies('categories.view')) {
            abort(403);
        }
        $data = Category::all();
        return response()->view('cms.categories.index', ['categories' => $data]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = Category::all();
        return response()->view('cms.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'title' => 'required|string|min:3|max:25',
            'slug'  => 'required|string|min:3|max:25',
            'active' => 'in:on'
        ], [
            'title.required' => 'Please, enter the title',
            'slug.required' => 'Please, enter the title'
        ]);
        $category = new Category();
        $category->title = $request->get('title');
        $category->slug = $request->get('slug');
        $category->active = $request->has('active') ? true : false;
        // $category->categories()->attach($request->categories_id);
        $isSaved = $category->save();

        session()->flash('message', $isSaved ? 'Category to created Successfuly' : 'Falied created category');
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
        $category = Category::findOrFail($id);
        return response()->view('cms.categories.index',['category' => $category]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'title' => 'required|string|min:3|max:25',
            'slug'  => 'required|string|min:3|max:25',
            'active' => 'in:on'
        ]);

        $category = Category::findOrFail($id);
        $category->title = $request->get('title');
        $category->slug = $request->get('slug');
        $category->active = $request->has('active') ? true : false;
        $isSaved = $category->save();


        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $isDestroyed = Category::destroy($id);
        // return redirect()->back();
        if ($isDestroyed) {
            return response()->json(['icon' => 'success', 'title' => 'Category deleted Successufly'], 200);
        } else {
            return response()->json(['icon' => 'error', 'title' => 'Failed to delete category'], 400);
        }
    }
}



