<?php

use App\Http\Controllers\Api\ArenaApiController;
use App\Http\Controllers\Api\BookingApiController;
use Illuminate\Support\Facades\Route;

Route::post('arena/create', [ArenaApiController::class, 'store']);
Route::post('booking/create', [BookingApiController::class, 'store']);
Route::post('booking/confirm/{bookingId}', [BookingApiController::class, 'confirm']);
