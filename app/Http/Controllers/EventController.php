<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $events = Event::where('user_id', auth()->id())->get();

    return view('events.index', compact('events'));
}

    /**
     * Show the form for creating a new resource.
     */
public function create()
{
    $categories = Category::all();

    return view('events.create', compact('categories'));
}

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    Event::create([
        'user_id' => auth()->id(),
        'category_id' => $request->category_id,
        'title' => $request->title,
        'description' => $request->description,
        'date_time' => $request->date_time,
        'location' => $request->location,
        'capacity' => $request->capacity,
        'banner_path' => 'sem-banner.jpg',
    ]);

    return redirect('/events');
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
    $event = Event::findOrFail($id);

    $categories = Category::all();

    return view(
        'events.edit',
        compact('event', 'categories')
    );
}

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, string $id)
{
    $event = Event::findOrFail($id);

    $event->update([
        'title' => $request->title,
        'description' => $request->description,
    ]);

    return redirect('/events');
}

    /**
     * Remove the specified resource from storage.
     */
public function destroy(string $id)
{
    $event = Event::findOrFail($id);

    $event->delete();

    return redirect('/events');
}
}
