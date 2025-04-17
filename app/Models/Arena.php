<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arena extends Model
{
    use HasFactory;

    protected $fillable = ['name','note','user_id'];

    public function user(){
        return $this->belongsto(User::class);
    }

    public function arenas(){
        return $this->hasMany(TimeSlot::class);
    }

}
