<?php

use App\Models\Kamer;
use App\Models\reservation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\findRoomsController;
use App\Http\Controllers\addReservationController;
use App\Http\Controllers\DeleteReservationController;
use App\Http\Controllers\UpdateReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/kamers', function () {
    return view('kamers', ['kamers' => Kamer::all()]);
});

// Route::get('/reserveringen', function () {
//     return view('reserveringen', ['reserveringen' => reservation::all()]);
// });

Route::get('/reserveringen', function () {
    $bookingController = new BookingController();
    $availableRoomsCountByDate = $bookingController->getAvailableRooms();
    return view('reserveringen', ['reserveringen' => Reservation::all(), 'availableRoomsCountByDate' => $availableRoomsCountByDate]);
});

Route::get('/reserveringen/pdf', [BookingController::class, 'generateReservationsPDF']);

Route::get('/booking', [findRoomsController::class, 'find'])->name('booking.availableRooms');

// Route::get('/completeReservation/{id}', function ($id) {
//     return view('completeReservation',['reserveering' => Reservation::find($id)]);
// });


Route::get('/completeReservation/pdf/{id}', [BookingController::class, 'generateBonPDF'])->defaults('id', '$id');

Route::post('/addReservation', [addReservationController::class, 'store']);

Route::post('/update/{id}', [UpdateReservationController::class, 'update']);
Route::get('/delete/{id}', [DeleteReservationController::class, 'destroy']);

Route::get('/login', [SessionController::class, 'create'])->middleware('guest');

Route::post('/login', [SessionController::class, 'store'])->middleware('guest');

Route::get('logout', [SessionController::class, 'destroy'])->middleware('auth');
