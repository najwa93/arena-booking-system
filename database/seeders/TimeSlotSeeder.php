<?php

namespace Database\Seeders;

use App\Models\Arena;
use App\Models\TimeSlot;
use App\Models\User;
use Illuminate\Database\Seeder;

class TimeSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $owner = User::factory()->asOwner()->create([
            'name' => 'Owner User',
            'email' => 'owner@example.com',
        ]);

        $customer = User::factory()->asCustomer()->create([
            'name' => 'Customer User',
            'email' => 'customer@example.com',
        ]);

        $arenas = Arena::factory(3)->create([
            'user_id' => $owner->id,
        ]);

        foreach ($arenas as $arena) {
            TimeSlot::factory(5)->create([
                'arena_id' => $arena->id,
            ]);
        }
    }
}
