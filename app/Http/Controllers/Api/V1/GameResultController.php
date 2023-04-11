<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\GameResultResource;
use App\Http\Resources\GameResultResourceCollection;
use App\Models\GameResult;
use App\Http\Requests\StoreGameResultRequest;
use App\Http\Requests\UpdateGameResultRequest;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Response;

class GameResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ResourceCollection
     */
    public function index():ResourceCollection
    {
        $results = GameResult::query()
                    ->paginate();
        return GameResultResource::collection($results);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGameResultRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGameResultRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GameResult  $gameResult
     * @return \Illuminate\Http\Response
     */
    public function show(GameResult $gameResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GameResult  $gameResult
     * @return \Illuminate\Http\Response
     */
    public function edit(GameResult $gameResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGameResultRequest  $request
     * @param  \App\Models\GameResult  $gameResult
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGameResultRequest $request, GameResult $gameResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GameResult  $gameResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(GameResult $gameResult)
    {
        //
    }
}
