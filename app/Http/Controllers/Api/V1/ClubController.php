<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClubRequest;
use App\Http\Requests\UpdateClubRequest;
use App\Http\Resources\ClubResource;
use App\Http\Resources\ClubResourceCollection;
use App\Models\Club;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

/**
 * @group Club Resource
 * APIs to manage Club model data resource
 */
class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * Gets a list of clubs
     *
     * @return ResourceCollection
     */
    public function index( ):ResourceCollection
    {
        //
        $clubs = Club::query()
                ->paginate(9);
        return ClubResource::collection($clubs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreClubRequest $request
     * @return ClubResource
     */
    public function store(StoreClubRequest $request):ClubResource
    {
        $club = Club::create($request->validated());
        return new ClubResource($club);
    }

    /**
     * Display the specified resource.
     *
     * @param Club $club
     * @return ClubResource
     */
    public function show(Club $club):ClubResource
    {
        //
        return new ClubResource ($club);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateClubRequest $request
     * @param Club $club
     * @return JsonResponse
     */
    public function update(UpdateClubRequest $request, Club $club): JsonResponse
    {
         $club->update($request->validated());
        return  response()->json(ClubResource::make($club), ResponseAlias::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Club $club
     * @return JsonResponse
     */
    public function destroy(Club $club):JsonResponse
    {
        //
        $club->delete();
        return response()->json(['success'=>'club deleted'],200);
    }
}
