<?php


namespace App\Domain\Arena;


class ArenaService
{
    protected $arenaRepository;

    public function __construct(ArenaRepositoryInterface $arenaRepository)
    {
        $this->arenaRepository = $arenaRepository;
    }

    public function createArena($arenaData)
    {
        return $this->arenaRepository->create($arenaData);
    }

}
