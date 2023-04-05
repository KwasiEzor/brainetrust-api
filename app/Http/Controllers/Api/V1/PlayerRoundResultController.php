<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\PlayerRoundResult;
use App\Http\Requests\StorePlayerRoundResultRequest;
use App\Http\Requests\UpdatePlayerRoundResultRequest;

class PlayerRoundResultController extends Controller
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
     * @param  \App\Http\Requests\StorePlayerRoundResultRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlayerRoundResultRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlayerRoundResult  $playerRoundResult
     * @return \Illuminate\Http\Response
     */
    public function show(PlayerRoundResult $playerRoundResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlayerRoundResult  $playerRoundResult
     * @return \Illuminate\Http\Response
     */
    public function edit(PlayerRoundResult $playerRoundResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlayerRoundResultRequest  $request
     * @param  \App\Models\PlayerRoundResult  $playerRoundResult
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlayerRoundResultRequest $request, PlayerRoundResult $playerRoundResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlayerRoundResult  $playerRoundResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlayerRoundResult $playerRoundResult)
    {
        //
    }
}
