<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use App\Notifications\NewEventCreateNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification;

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
        return response()->view('cms.events.create', ['even' => $data]);
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

        $image = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = $file->store('/images', 'public');
        }

        $request->merge([
            'image' => $image,
        ]);


        $even = new Event();
        $even->title = $request->get('title');
        $even->description = $request->get('description');
        $even->image = $request->get('image');
        // $even->image = $request->get('tag');
        $isSaved = $even->save();

        // Get all the other admins except the one who created the news
        // $users = User::where('id', '!=', 3)->get();

        // Send email notifications to each admin
        /*foreach ($usres as $usre) {
            Mail::to($usre->email)->send(new NewEventCreateNotification($user, $events));
        }*/

        // event(new NewEventCreateNotification($even));

        // Get all the other admins except the one who created the news
        /*$users = User::where('email', '!=', 'kmfah9@gmail.com')->get();
        if ($users->type == 'admin' ) {
            foreach($users as $user){
                Notification::send($user, new NewEventCreateNotification($even));
            }
        }*/


        //$user->notify(new NewEventCreateNotification($even));
        // $users->notify(new NewEventCreateNotification($even));

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

        $data = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image'] = $file->store('/images', 'public');
        }


        $even = Event::findOrFail($id);
        $even->title = $request->get('title');
        $even->description = $request->get('description');
        $even->image = $request->get('image');
        // $even->image = $request->get('tag');
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
