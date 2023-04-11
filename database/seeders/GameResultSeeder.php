<?php

namespace Database\Seeders;

use App\Models\GameResult;
use App\Models\Player;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class GameResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $jsonFile = File::get(public_path('data/game_results.json'));
         $gameResultsData = json_decode($jsonFile);

        foreach ($gameResultsData->data as $key => $item) {
            foreach ($item->results as $val => $result) {
                GameResult::create([
                    'ranking_position' => $result->ranking_position,
                    'player_top' => $result->player_top,
                    'game_top' => $result->game_top,
                    'percentage' => $result->percentage,
                    'game_id' => $result->sc_game_id,
                    'player_id' => Player::inRandomOrder()->first()->id
                ]);
            }
         }
    }
}
