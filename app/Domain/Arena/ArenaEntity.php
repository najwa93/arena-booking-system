<?php


namespace App\Domain\Arena;


class ArenaEntity
{
    private $name;
    private $note;

    public function __construct($name,$note)
    {
        $this->name = $name;
        $this->note = $note;
    }

}
