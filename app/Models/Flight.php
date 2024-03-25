<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
    'airline_id',
    'no_flight',
    'departure_city',
    'arrival_city',
    'departure_date',
    'departure_time',
    'arrival_date',
    'arrival_time',
    'seat_availability',
    'price',
    ];

    public function airline(){
        return $this->belongsTo(Airline::class);
    }
}
