<?php

namespace App\Http\Controllers;

use App\Models\Kamer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class findRoomsController extends Controller
{
    public function find(Request $request)
    {   
        $checkInDate = $request->input('van');
        $checkOutDate = $request->input('tot');

        $availableRooms = Kamer::leftJoin('reservations', 'kamers.id', '=', 'reservations.kamer_id')
            ->whereNotBetween('reservations.van', [$checkInDate, $checkOutDate])
            ->whereNotBetween('reservations.tot', [$checkInDate, $checkOutDate])
            ->orWhere('reservations.id', null)
            ->select('kamers.*')
            ->get();

            return view('booking', ['kamers' => $availableRooms]);
    }
}
