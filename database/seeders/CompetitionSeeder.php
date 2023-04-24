<?php

namespace Database\Seeders;

use App\Models\Competition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonFile = File::get(public_path('data/competitions.json'));
        $competitionsData = json_decode($jsonFile);
        foreach ($competitionsData->data as $key => $competition) {
            Competition::create([
                'name'=>"Amicale",
                'club_id'=>7,
                'competition_type_id'=>1,
                'start_date'=>now(),
                'end_date'=>now(),
            ]);
        }
    }
}
