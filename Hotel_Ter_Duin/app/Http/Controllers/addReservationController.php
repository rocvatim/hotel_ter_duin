<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\Kamer;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class addReservationController extends Controller
{
    public function store()
    {

        $attributes = request()->validate([
            'kamer_id' => 'required',
            'Van' => 'required',
            'Tot' => 'required',
            'Naam' => 'required',
            'Adres' => 'required',
            'Plaats' => 'required',
            'Postcode' => 'required',
            'Telefoon' => 'required'
        ]);

        Reservation::create($attributes);

        $reservationId = DB::getPdo()->lastInsertId();

        return view('completeReservation', ['reservationId' => $reservationId]);
        
    }

}
