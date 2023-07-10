<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Event::all();
        return response()->view('cms.events.index', ['news' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = Event::all();
        return response()->view('cms.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|string|min:3|max:25',
            'description'  => 'string|min:3|max:200',
            //'image' => 'file|size:512'

        ]);
        $even = new Event();
        $even->title = $request->get('title');
        $even->description = $request->get('description');
        $even->image = $request->get('image');
        $isSaved = $even->save();

        session()->flash('message', $isSaved ? 'New to created Successfuly' : 'Falied created New');
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
        $even = Event::findOrFail($id);
        return response()->view('cms.events.edit',['new' => $even]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'title' => 'required|string|min:3|max:25',
            'description'  => 'string|min:3|max:200',
            //'image' => 'file|size:512'

        ]);
        $even = Event::findOrFail($id);
        $even->title = $request->get('title');
        $even->description = $request->get('description');
        $even->image = $request->get('image');
        $isSaved = $even->save();


        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $isDestroyed = Event::destroy($id);
        // return redirect()->back();
        if ($isDestroyed) {
            return response()->json(['icon' => 'success', 'title' => 'News deleted Successufly'], 200);
        } else {
            return response()->json(['icon' => 'error', 'title' => 'Failed to delete New'], 400);
        }
    }
}
