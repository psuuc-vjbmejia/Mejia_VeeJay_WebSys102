<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index() // Now for Upcoming Events
    {
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();
        $events = Event::whereBetween('schedule', [$startOfMonth, $endOfMonth])
                       ->orderBy('schedule', 'asc')
                       ->get();
        return view('events.upcoming', compact('events')); // Points to upcoming.blade.php
    }
    
    public function allEvents() // Now for All Events (main index)
    {
        $events = Event::orderBy('schedule', 'asc')->get();
        return view('events.index', compact('events')); // Points to index.blade.php
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'speaker' => 'nullable',
            'schedule' => 'required|date',
            'attendee' => 'nullable',
        ]);

        Event::create($request->all());
        return redirect()->route('events.index')->with('success', 'Event created successfully!');
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'description' => 'required',
            'speaker' => 'nullable',
            'schedule' => 'required|date',
        ]);

        $event->update($request->all());
        return redirect()->route('events.index')->with('success', 'Event updated successfully!');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index');
    }

}
