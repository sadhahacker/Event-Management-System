<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Models\User;
use App\Models\Event;
use App\Models\EventCategorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    // public function auth(){
    //     return view('auth',['user' => auth()->user()]);
    // }
    public function getAllEvents()
    {
        $events = Event::all();
        return $events;
    }
    public function getevents(Request $request)
    {
        $perPage = 10; // Number of items per page
        $page = $request->input('page', 1); // Current page, default is 1
        $param1 = $request->input('Title', null); //
        $param2 = $request->input('Location', null);
        $param3 = $request->input('Category', null);

        // Base query without filters
        $query = Event::query();

        // Apply filters if parameters are provided
        if ($param1 !== null) {
            $query->where('Title', $param1);
        }
        if ($param2 !== null) {
            $query->where('Location', $param2);
        }

        if ($param3 !== null) {
            $query->where('Category', $param3);
        }

        // Paginate the results
        $results = $query->paginate($perPage, ['*'], 'page', $page);

        return response()->json($results);
    }
    public function topEvents()
    {
        $topMaxAttendees = Event::orderBy('CurrentAttendees', 'desc')
            ->take(3)
            ->get();

        $topAscendingStartDateTime = Event::orderBy('StartDateTime', 'asc')
            ->take(3)
            ->get();

        $topCategories = EventCategorie::all();

        $combinedResults = [
            'topsellingevents' => $topMaxAttendees,
            'upcommingevents' => $topAscendingStartDateTime,
            'categories' => $topCategories,
            'user' => Auth::user(),
        ];

        return response()->json($combinedResults);
    }
    public function myEvents(Request $request)
    {
        $perPage = 5; // Number of items per page
        $page = $request->input('page', 1); // Current page, default is 1
        $param1 = $request->input('Title', null);
        $param2 = $request->input('Location', null);
        $param3 = $request->input('Category', null);

        $id = auth()->user()->UserID;
        // $query = Event::join('attendees', 'events.EventID', '=', 'attendees.EventID')
        //     ->where('attendees.UserID', $id);

        $query = Attendee::with('event');

        // Apply filters
        if ($param1 !== null) {
            $query->whereHas('event', function ($query) use ($param1) {
                $query->where('Title', $param1);
            });
        }
        if ($param2 !== null) {
            $query->whereHas('event', function ($query) use ($param2) {
                $query->where('Location', $param2);
            });
        }
        if ($param3 !== null) {
            $query->whereHas('event', function ($query) use ($param3) {
                $query->where('Category', $param3);
            });
        }

        // Finally, retrieve the results
        $query->where('UserID', $id)->get();


        // Paginate the results
        $myEvents = $query->paginate($perPage);

        return response()->json($myEvents);
    }
    public function singleEvent(Request $request)
    {
        $id = $request->input('eventId');
        // Fetch the event from the database by its ID
        $event = Event::find($id);

        if (!$event) {
            // If event not found, return error response
            return response()->json([
                'success' => false,
                'message' => 'Event not found',
            ], 404);
        }

        // Return the event as JSON response
        return response()->json([
            'success' => true,
            'data' => $event,
        ]);
    }
    public function getSpecificMyEvent(Request $request)
    {
        $id = $request->input('attendeeId');
        // $attendee = Attendee::select('attendees.*', 'events.*')
        //     ->join('events', 'attendees.EventID', '=', 'events.EventID')
        //     ->where('AttendeeID', $id)
        //     ->first();

        $attendee = Attendee::with('event')->where('AttendeeID', $id)->first();

        if (!$attendee) {
            return response()->json(['message' => 'Attendee not found'], 404);
        }

        return response()->json($attendee);
    }
    public function deleteEvent(Request $request)
    {
        $id = $request->input('eventId');
        // Find the event by its ID
        $event = Event::find($id);

        // Check if the event exists
        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        // Delete the event
        $event->delete();

        // Return success response
        return response()->json(['message' => 'Event deleted successfully']);
    }
    public function updateEvent(Request $request)
    {
        $id = $request->eventId;
        // Find the event by ID
        $event = Event::find($id);

        // Check if the event exists
        if (!$event) {
            return response()->json(['error' => 'Event not found'], 404);
        }

        // Update event fields
        $event->Title = $request->input('title');
        $event->Description = $request->input('description');
        $event->StartDateTime = $request->input('startDateTime');
        $event->EndDateTime = $request->input('endDateTime');
        $event->Location = $request->input('location');
        $event->Category = $request->input('categoryname');
        $event->MaxAttendees = $request->input('maxAttendees');
        $event->RegistrationFee = $request->input('registrationFee');
        $event->Status = $request->input('status');
        // Update other event fields as needed
        if ($request->hasFile('eventImage')) {
            // Handle image upload
            $imageFileName = $request->file('eventImage')->getClientOriginalName();
            $imagePath = $request->file('eventImage')->move(public_path('assets/img/events'), $imageFileName);

            $event->Image = $imageFileName;
        }

        // Save the updated event
        $event->save();

        // Return success response
        return response()->json(['message' => 'Event updated successfully']);
    }
    public function create(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'startDateTime' => 'required|date',
            'endDateTime' => 'required|date|after:startDateTime',
            'location' => 'required|string|max:255',
            'maxAttendees' => 'required|integer',
            'registrationFee' => 'required|numeric',
            'categoryname' => 'required|string',
            'status' => 'required',
            'eventImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max size of 2MB
        ]);

        // Handle image upload
        $imageFileName = $request->file('eventImage')->getClientOriginalName();
        $imagePath = $request->file('eventImage')->move(public_path('assets/img/event'), $imageFileName);
        ;

        // Create a new event instance
        $event = new Event();
        $event->Title = $validatedData['title'];
        $event->Description = $validatedData['description'];
        $event->StartDateTime = $validatedData['startDateTime'];
        $event->EndDateTime = $validatedData['endDateTime'];
        $event->Location = $validatedData['location'];
        $event->Category = $validatedData['categoryname'];
        $event->MaxAttendees = $validatedData['maxAttendees'];
        $event->RegistrationFee = $validatedData['registrationFee'];
        $event->Status = $validatedData['status'];
        $event->Image = $imageFileName; // Store only the image file name in the database

        // Save the new event
        $event->save();

        // Return success response
        return response()->json(['message' => 'Event created successfully']);
    }


}
