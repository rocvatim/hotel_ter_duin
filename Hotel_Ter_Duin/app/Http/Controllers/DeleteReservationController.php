<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class DeleteReservationController extends Controller
{
    public function destroy($id)
    {
        
        Reservation::destroy($id);

        return redirect('/reserveringen');
        
    }
}
