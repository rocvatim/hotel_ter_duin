<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;

class BookingController extends Controller
{


    public function getAvailableRooms()
    {
        $totalNumberOfRooms = 10;

        $startDate = Carbon::today();
        $endDate = Carbon::today()->addDays(30);

        $dates = [];
        $currentDate = $startDate->copy();
        while ($currentDate->lte($endDate)) {
            $dates[] = $currentDate->format('Y-m-d');
            $currentDate->addDay();
        }

        $availableRoomsCountByDate = [];
        foreach ($dates as $date) {
            $reservationCount = DB::table('reservations')
                ->where(function ($query) use ($date) {
                    $query->whereDate('van', '<=', $date)
                        ->whereDate('tot', '>=', $date);
                })
                ->orWhere(function ($query) use ($date) {
                    $query->whereDate('van', '>=', $date)
                        ->whereDate('tot', '<=', $date);
                })
                ->orWhere(function ($query) use ($date) {
                    $query->whereDate('van', '<=', $date)
                        ->whereDate('tot', '>=', $date)
                        ->whereDate('van', '!=', $date)
                        ->whereDate('tot', '!=', $date);
                })
                ->count();

            $availableRoomsCountByDate[$date] = $totalNumberOfRooms - $reservationCount;
        }

        return $availableRoomsCountByDate;
    }

    public function generateReservationsPDF()
    {
        $reservations = Reservation::all();

        $pdfContent = View::make('pdf.reservations', ['reservations' => $reservations])->render();

        $dompdf = new Dompdf();

        $dompdf->loadHtml($pdfContent);

        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        $dompdf->stream('reservations.pdf', ['Attachment' => true]);
    }

    public function generateBonPDF($Id)
    {

        $reservation = Reservation::find($Id);

        $pdfContent = View::make('pdf.bon', ['reservation' => $reservation])->render();

        $dompdf = new Dompdf();

        $dompdf->loadHtml($pdfContent);

        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        $dompdf->stream('reservations.pdf', ['Attachment' => true]);

    }
}
