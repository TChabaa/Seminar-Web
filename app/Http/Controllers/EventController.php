<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\StoreEventsRequest;
use App\Http\Requests\UpdateEventsRequest;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('pic.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pic.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventsRequest $request)
    {
        // Validate the request
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
        // ]);


// Handle file upload if an image is provided

// $event_img = $request->vent_titlee . '.' . $request->image->extension();
// $request->image->move(public_path('assets/images/events'), $event_img);


$event_title = $request->event_title;
$event_description = $request->event_description;
$event_date = $request->event_date;
$end_date = $request->end_date;
$registration_date = $request->registration_date;
$registration_end_date = $request->registration_end_date;
$event_time = $request->event_time;
$organizer_name = $request->organizer_name;
$event_type = $request->event_type;
$event_location = $request->event_location;
// $event_link = $request->event_link;
$payment_status = $request->payment_status;
$event_price = $request->event_price;
// $event_img = $request->event_img;

Event::create([
    'event_title' => $event_title,
    'event_description' => $event_description,
    'event_date' => $event_date,
    'end_date' => $end_date,
    'registration_date' => $registration_date,
    'registration_end_date' => $registration_end_date,
    'event_time' => $event_time,
    'organizer_name' => $organizer_name,
    'event_type' => $event_type,
    'event_location' => $event_location,
    // 'event_link' => $event_link,
    'payment_status' => $payment_status,
    'event_price' => $event_price,
    // 'event_img' => $event_img,
]);
// Redirect to the events index page with a success message
return view('pic.events.index')->with('success', 'Event created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('pic.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('pic.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventsRequest $request, Event $event)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);


// Handle file upload if an image is provided

    $event_img = $request->vent_titlee . '.' . $request->image->extension();
        $request->image->move(public_path('assets/images/events'), $event_img);


// Create a new Event instance and populate its attributes

$event->update([
    'event_title' => $request->event_title,
'event_description' => $request->event_description,
'event_date' => $request->event_date,
'end_date' => $request->end_date,
'registration_date' => $request->registration_date,
'registration_end_date' => $request->registration_end_date,
'organizer_name' => $request->organizer_name,
'event_type' => $request->event_type,
'event_location' => $request->event_location,
'event_link' => $request->event_link,
'payment_status' => $request->payment_status,
'event_price' => $request->event_price,
'event_img' => $request->event_img,
]);
// Redirect to the events index page with a success message


        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('pic.eventList.index')->with('success', 'Event deleted successfully.');
    }
}