<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class UpdateReservationController extends Controller
{
    public function update($id)
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

        $reservation = Reservation::find($id);

        $reservation->kamer_id = $attributes['kamer_id'];
        $reservation->van = $attributes['Van'];
        $reservation->tot = $attributes['Tot'];
        $reservation->naam = $attributes['Naam'];
        $reservation->adres = $attributes['Adres'];
        $reservation->plaats = $attributes['Plaats'];
        $reservation->postcode = $attributes['Postcode'];
        $reservation->telefoon = $attributes['Telefoon'];

        $reservation->save();

        return redirect('/reserveringen');
    }
}
