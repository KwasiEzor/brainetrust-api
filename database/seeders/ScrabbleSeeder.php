<?php

namespace Database\Seeders;

use App\Models\Scrabble;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ScrabbleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonFile = File::get(public_path('data/scrabble.json'));
        $scrabbleData = json_decode($jsonFile);

        foreach ($scrabbleData->data as $key =>$scrabble) {
            Scrabble::create([
                'name'=>$scrabble->name,
                'description'=>$scrabble->description,
            ]);
        }
    }
}
