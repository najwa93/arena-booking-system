<?php


namespace App\Domain\Booking;


class BookingEntity
{
    private $status;
    private $confirmed_at;
    private $expired_at;

    public function __construct($status,$confirmed_at,$expired_at)
    {
        $this->status = $status;
        $this->confirmed_at = $confirmed_at;
        $this->expired_at = $expired_at;
    }


}
