<?php

namespace Database\Factories;

use App\Models\Arena;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArenaEntity>
 */
class ArenaFactory extends Factory
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
    protected $model = Arena::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'user_id' => User::factory()->asOwner(),
            'note' => fake()->text
        ];
    }
}
