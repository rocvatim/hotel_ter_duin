<?php

namespace App\Models;

use App\Models\Kamer;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kamer()
    {
        return $this->belongsTo(Kamer::class);
    }

    public $timestamps = false;

    

    public function getNumberOfDays()
    {
        $checkInDate = Carbon::parse($this->van);
        $checkOutDate = Carbon::parse($this->tot);

        return $checkOutDate->diffInDays($checkInDate);
    }
}
