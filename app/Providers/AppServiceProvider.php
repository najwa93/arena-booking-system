<?php

namespace App\Providers;

use App\Domain\Arena\ArenaRepository;
use App\Domain\Arena\ArenaRepositoryInterface;
use App\Domain\Booking\BookingRepository;
use App\Domain\Booking\BookingRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ArenaRepositoryInterface::class,ArenaRepository::class);
        $this->app->bind(BookingRepositoryInterface::class,BookingRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
