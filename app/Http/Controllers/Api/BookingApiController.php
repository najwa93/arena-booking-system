<?php

namespace App\Http\Controllers\Api;

use App\Domain\Booking\BookingService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Resources\BookingResource;
use App\Traits\ApiResponse;

class BookingApiController extends Controller
{
    use ApiResponse;

    protected $bookingService;

    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService;
    }

    public function store(StoreBookingRequest $request)
    {
        $bookingData = $request->validated();

        $booking = $this->bookingService->createBooking($bookingData);

        return $this->successResponse(new BookingResource($booking),'Booking Created Successfully');
    }

    public function confirm($bookingId)
    {
        return $this->bookingService->confirmBooking($bookingId);
    }
}
