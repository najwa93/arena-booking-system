<?php

namespace App\Http\Controllers\Api;

use App\Domain\Arena\ArenaService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArenaRequest;
use App\Http\Resources\ArenaResource;
use App\Traits\ApiResponse;

class ArenaApiController extends Controller
{
    use ApiResponse;

    protected $arenaService;

    public function __construct(ArenaService $arenaService)
    {
        $this->arenaService = $arenaService;
    }

    public function store(StoreArenaRequest $request)
    {
        $arenaData = $request->validated();

        $arena = $this->arenaService->createArena($arenaData);

        return $this->successResponse(new ArenaResource($arena),'Arena Created Successfully');
    }
}
