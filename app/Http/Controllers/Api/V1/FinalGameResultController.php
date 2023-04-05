<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\FinalGameResult;
use App\Http\Requests\StoreFinalGameResultRequest;
use App\Http\Requests\UpdateFinalGameResultRequest;

class FinalGameResultController extends Controller
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
     * @param  \App\Http\Requests\StoreFinalGameResultRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFinalGameResultRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FinalGameResult  $finalGameResult
     * @return \Illuminate\Http\Response
     */
    public function show(FinalGameResult $finalGameResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FinalGameResult  $finalGameResult
     * @return \Illuminate\Http\Response
     */
    public function edit(FinalGameResult $finalGameResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFinalGameResultRequest  $request
     * @param  \App\Models\FinalGameResult  $finalGameResult
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFinalGameResultRequest $request, FinalGameResult $finalGameResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FinalGameResult  $finalGameResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(FinalGameResult $finalGameResult)
    {
        //
    }
}
