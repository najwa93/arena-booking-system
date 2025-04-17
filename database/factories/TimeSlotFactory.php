<?php

namespace Database\Factories;

use App\Models\Arena;
use App\Models\TimeSlot;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TimeSlot>
 */
class TimeSlotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = TimeSlot::class;

    public function definition(): array
    {
        $start_time = Carbon::now()->addMinutes(rand(0, 300));
        $duration = rand(30, 60);
        $end_time = (clone $start_time)->addMinutes($duration);


        return [
            'start_time' => $start_time,
            'end_time' => $end_time,
            'duration' => $start_time->diffInMinutes($end_time),
            'is_booked' => fake()->boolean(false),
            'arena_id' => Arena::factory(),
        ];
    }
}
