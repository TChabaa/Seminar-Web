<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventManagementController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_title' => 'required',
            'event_description' => 'required',
            'event_date' => 'required|date',
            'end_date' => 'required|date',
            'registration_date' => 'required|date',
            'registration_end_date' => 'required|date',
            'event_time' => 'required',
            'organizer_name' => 'required',
            'event_type' => 'required',
            'event_location' => 'required',
            'payment_status' => 'required',
            'event_price' => 'required|numeric',
        ]);

        Event::create($request->all());

        return redirect()->route('admin.events.index')->with('success', 'Event created successfully.');
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'event_title' => 'required',
            'event_description' => 'required',
            'event_date' => 'required|date',
            'end_date' => 'required|date',
            'registration_date' => 'required|date',
            'registration_end_date' => 'required|date',
            'event_time' => 'required',
            'organizer_name' => 'required',
            'event_type' => 'required',
            'event_location' => 'required',
            'payment_status' => 'required',
            'event_price' => 'required|numeric',
        ]);

        $event->update($request->all());

        return redirect()->route('admin.events.index')->with('success', 'Event updated successfully.');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Event deleted successfully.');
    }
}
