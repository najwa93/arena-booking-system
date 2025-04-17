<?php


namespace App\Domain\User;


use App\Constants\RoleType;

class UserEntity
{
    private $role;

    public function __construct($role)
    {
        $this->role = $role;
    }

    public function isOwner()
    {
        return $this->role == RoleType::OWNER;
    }

}
