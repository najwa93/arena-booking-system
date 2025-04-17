<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['time_slot_id','user_id','status','expired_at'];

    public function timeslot(){
        return $this->belongsto(TimeSlot::class);
    }

    public function user(){
        return $this->belongsto(User::class);
    }
}
