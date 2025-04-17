<?php


namespace App\Domain\Arena;

use App\Domain\User\UserEntity;
use App\Models\Arena;
use App\Models\User;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ArenaRepository implements ArenaRepositoryInterface
{

    public function create(array $data)
    {
        $user = User::find($data['user_id']);

        if (!$user){
            throw new HttpException(403, 'User not found.');
        }

        $domainUser = new UserEntity($user->role);

        if (!$domainUser->isOwner()) {
            throw new HttpException(403, 'Only owners can create arenas.');
        }

        return Arena::create([
            'user_id' => $data['user_id'],
            'name' => $data['name'],
            'note' => $data['note'],
        ]);
    }

}
