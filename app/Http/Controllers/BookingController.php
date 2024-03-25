<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function getBookings()
    {
        $data = Attendee::select('users.Username as UserName', 'events.Title as EventName', 'attendees.*')
            ->join('users', 'attendees.UserID', '=', 'users.UserID')
            ->join('events', 'attendees.EventID', '=', 'events.EventID')
            ->get();
        return $data;
    }
    public function getSpecificBookings(Request $request)
    {
        $attendeeId = $request->attendeeId;
        $data = Attendee::select(
            'users.Username as UserName',
            'events.Title as EventName',
            'attendees.*'
        )
            ->join('users', 'attendees.UserID', '=', 'users.UserID')
            ->join('events', 'attendees.EventID', '=', 'events.EventID')
            ->where('attendees.AttendeeID', $attendeeId)
            ->first();

        return $data;
    }
    public function deleteBooking(Request $request)
    {
        $attendeeId = $request->attendeeId;
        // Find the attendee by ID
        $attendee = Attendee::find($attendeeId);

        // Check if the attendee exists
        if (!$attendee) {
            return response()->json(['message' => 'Booking not found'], 404);
        }

        // Delete the attendee
        $attendee->delete();

        return response()->json(['message' => 'Booking deleted successfully'], 200);
    }
}
