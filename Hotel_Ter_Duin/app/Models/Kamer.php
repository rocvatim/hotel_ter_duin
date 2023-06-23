<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamer extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
