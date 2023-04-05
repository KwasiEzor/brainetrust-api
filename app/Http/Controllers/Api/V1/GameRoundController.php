<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\GameRound;
use App\Http\Requests\StoreGameRoundRequest;
use App\Http\Requests\UpdateGameRoundRequest;

class GameRoundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreGameRoundRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGameRoundRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GameRound  $gameRound
     * @return \Illuminate\Http\Response
     */
    public function show(GameRound $gameRound)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GameRound  $gameRound
     * @return \Illuminate\Http\Response
     */
    public function edit(GameRound $gameRound)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGameRoundRequest  $request
     * @param  \App\Models\GameRound  $gameRound
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGameRoundRequest $request, GameRound $gameRound)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GameRound  $gameRound
     * @return \Illuminate\Http\Response
     */
    public function destroy(GameRound $gameRound)
    {
        //
    }
}
