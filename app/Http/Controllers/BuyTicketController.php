<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use Illuminate\Http\Request;

class BuyTicketController extends Controller
{
    public function buyTicket(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'eventId' => 'required', // Make sure the event ID exists in the events table
            'quantity' => 'required|integer|min:1', // Quantity must be a positive integer
        ]);

        // Get the currently authenticated user
        $user = $request->user();

        // Create a new attendee record
        $attendee = new Attendee();
        $attendee->UserID = auth()->user()->UserID;
        $attendee->EventID = $request->eventId;
        $attendee->Quantity = $request->quantity;
        $attendee->save();

        // Return a success response
        return response()->json([
            'success' => true,
            'message' => 'Ticket Bought.',
        ], 201); // Use HTTP status code 201 for successful resource creation
    }
}
