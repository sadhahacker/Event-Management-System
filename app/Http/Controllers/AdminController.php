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

        $grandTotal =  Attendee::with('event')->get()->sum(function ($attendee) {
            return $attendee->event->RegistrationFee * $attendee->Quantity;
        });

        $data = [
            'customerCount' => $customerCount,
            'eventCount' => $eventCount,
            'bookingCount' => $bookingCount,
            'grandTotal' => $grandTotal,
        ];

        return response()->json($data);
    }


}
