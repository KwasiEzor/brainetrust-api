<?php

namespace Database\Seeders;

use App\Models\GameRound;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class GameRoundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonFile = File::get(public_path('data/game_rounds.json'));
        $gameRoundsData = json_decode($jsonFile);

        foreach ($gameRoundsData->data as $key => $item) {
            foreach ($item->game as $key => $gameRound) {
                GameRound::create([
                    'selected_letters'=>$gameRound->selected_letters,
                    'place_reference'=>$gameRound->place_reference,
                    'solution'=>$gameRound->solution,
                    'score'=>$gameRound->score,
                    'comments'=>$gameRound->comments,
                    'game_id'=>$gameRound->game_id,
                ]);
            }
        }
    }
}
