<?php

namespace App\Console\Commands;

use App\Constants\BookingStatus;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CheckBookingStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-booking-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check unconfirmed bookings status';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $now = Carbon::now();

        $bookings = Booking::where('status', BookingStatus::PENDING)
            ->where('expired_at', '<', $now)
            ->get();

        foreach ($bookings as $booking) {
            $booking->delete();
            $this->info('Booking ' . $booking->id . ' has been deleted.');
        }

    }
}
