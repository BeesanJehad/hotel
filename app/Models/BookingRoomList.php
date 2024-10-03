<?php

namespace App\Models;

use App\Models\Booking;
use App\Models\RoomNumber;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookingRoomList extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function room_number(){
        return $this->belongsTo(RoomNumber::class,'room_number_id');
    }

    public function booking(){
        return $this->belongsTo(Booking::class,'booking_id');
    }
}
