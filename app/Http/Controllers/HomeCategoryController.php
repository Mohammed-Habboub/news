<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeCategoryController extends Controller
{
    public function index()
    {

        $events = Event::latest()->take(4)->get();
        $categories = Category::latest()->take(5)->get();
        return view('news.front.categori', [
                'events' => $events,
                'categories' => $categories
            ]);
    }
}
