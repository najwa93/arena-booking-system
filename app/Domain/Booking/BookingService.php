<?php


namespace App\Domain\Booking;


class BookingService
{
    protected $bookingRepository;

    public function __construct(BookingRepositoryInterface $bookingRepository)
    {
        $this->bookingRepository = $bookingRepository;
    }

    public function createBooking($bookingData)
    {
        return $this->bookingRepository->book($bookingData);
    }

    public function confirmBooking($bookingId)
    {
        return $this->bookingRepository->confirm($bookingId);
    }
}
