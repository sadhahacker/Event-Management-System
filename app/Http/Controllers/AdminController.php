<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use App\Models\Ticket;

class AdminController extends Controller
{
    public function getreport()
    {
        $customerCount = User::where('UserType', 'attendee')->count();
        $eventCount = Event::count();
        $bookingCount = Attendee::count();

        // Calculate the grand total using Eloquent
        $grandTotal = Attendee::join('events', 'attendees.EventID', '=', 'events.EventID')
            ->selectRaw('SUM(attendees.Quantity * events.RegistrationFee) AS GrandTotal')
            ->groupBy('attendees.AttendeeID', 'events.EventID', 'events.Title')
            ->get()->sum('GrandTotal');

        $data = [
            'customerCount' => $customerCount,
            'eventCount' => $eventCount,
            'bookingCount' => $bookingCount,
            'grandTotal' => $grandTotal,
        ];

        return response()->json($data);
    }


}
