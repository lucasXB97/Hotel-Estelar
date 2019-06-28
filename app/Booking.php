<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'room_id', 'user_id', 'start_date', 'end_date', 'total_amount', 'type_booking', 'status'
    ];
}

