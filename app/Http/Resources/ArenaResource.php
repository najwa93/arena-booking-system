<?php

namespace App\Http\Resources;

use App\Constants\RoleType;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArenaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'name' => $this->user->name,
            'email' => $this->user->email,
            'role' => $this->user->role == RoleType::OWNER ? 'Owner' : 'Customer',
            'arena_name' => $this->name,
            'note' => $this->note
        ];
    }
}
