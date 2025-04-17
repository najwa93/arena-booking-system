<?php


namespace App\Domain\Booking;


interface BookingRepositoryInterface
{
    public function book(array $data);
    public function confirm($confirm);
}
