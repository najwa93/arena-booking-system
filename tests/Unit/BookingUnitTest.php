<?php

namespace Tests\Unit;

use App\Domain\Booking\BookingRepository;
use App\Models\TimeSlot;
use App\Models\User;
use Tests\TestCase;

class BookingUnitTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testBooking(): void
    {
        $user = User::factory()->create();
        $timeSlot = TimeSlot::factory()->create();

        $data = [
            'user_id' => $user->id,
            'time_slot_id' => $timeSlot->id,
        ];

        $bookingRepo = new BookingRepository();

        $bookingRepo->book($data);

        $this->assertDatabaseHas('bookings', [
            'user_id' => $user->id,
            'time_slot_id' => $timeSlot->id,
            'status' => 1,
        ]);
    }
}
