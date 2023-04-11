<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\PasswordUpdateController;
use App\Http\Controllers\Api\Auth\ProfileController;
use App\Http\Controllers\Api\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('v1/profile', [ProfileController::class, 'show']);
    Route::put('v1/profile', [ProfileController::class, 'update']);
    Route::put('v1/password',PasswordUpdateController::class);
});
Route::post('v1/auth/register', RegisterController::class);
Route::post('v1/auth/login', LoginController::class);
Route::post('v1/auth/logout', LogoutController::class);
Route::group(
    [
        'namespace'=>'App\Http\Controllers\Api\V1',
        'prefix'=>'v1'
    ]
    ,function (){
    Route::apiResource('clubs',\App\Http\Controllers\Api\V1\ClubController::class);
    Route::apiResource('users',\App\Http\Controllers\Api\V1\UserController::class)->only(['index','show']);
    Route::apiResource('competitions',\App\Http\Controllers\Api\V1\CompetitionController::class);
    Route::apiResource('games',\App\Http\Controllers\Api\V1\GameController::class);
    Route::apiResource('game-rounds',\App\Http\Controllers\Api\V1\GameRoundController::class);
    Route::apiResource('game-results',\App\Http\Controllers\Api\V1\GameResultController::class);
    Route::apiResource('players',\App\Http\Controllers\Api\V1\PlayerController::class);
    Route::apiResource('player-round-results',\App\Http\Controllers\Api\V1\PlayerRoundResultController::class);
});
