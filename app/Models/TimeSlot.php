<?php

namespace App\Models;

use App\Domain\Arena\ArenaEntity;
use App\Domain\Arena\Booking;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    use HasFactory;

    public function arena(){
        return $this->belongsto(ArenaEntity::class);
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
