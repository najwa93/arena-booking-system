<?php


namespace App\Domain\Booking;

use App\Constants\BookingStatus;
use App\Models\TimeSlot;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BookingRepository implements BookingRepositoryInterface
{
    public function book(array $data)
    {
        return DB::transaction(function () use ($data) {
            $now = Carbon::now();
            $timeSlot = TimeSlot::where('id',$data['time_slot_id'])->lockForUpdate()->first();
            if (Booking::where('time_slot_id',$timeSlot->id)->where('status','!=',BookingStatus::CONFIRMED)->exists())
            {
                  throw new \Exception('Time slot is already booked.');
            }

            $booking = Booking::create([
                'user_id' => $data['user_id'],
                'time_slot_id' => $timeSlot->id,
                'status' => BookingStatus::PENDING,
                'expired_at' => $now->copy()->addMinutes(3),
            ]);

            return $booking;
        });
    }

    public function confirm($bookId)
    {
        return DB::transaction(function () use ($bookId) {
            $booking = Booking::where('id',$bookId)->lockForUpdate()->first();

            if (!$booking) {
                throw new \Exception("Booking not found.");
            }

            if ($booking->status === BookingStatus::CONFIRMED) {
                throw new \Exception("Booking already confirmed.");
            }

            $booking->status = BookingStatus::CONFIRMED;
            $booking->confirmed_at = now();
            $booking->save();
            return $booking;
        });
    }
}
