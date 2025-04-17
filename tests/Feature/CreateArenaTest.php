<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateArenaTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testCreateArena(): void
    {
        $data = [
            'user_id' => 1,
            'name' => 'Arena Test',
            'note' => 'Test Arena Description',
        ];

        $response = $this->postJson('/arena/create', $data);

        $response->assertStatus(200);

        $this->assertDatabaseHas('arenas', [
            'name' => 'Arena Test',
            'note' => 'Test Arena Description',
        ]);
    }
}
