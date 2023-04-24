<?php

namespace Database\Seeders;

use App\Models\CompetitionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CompetitionTypeSeeder extends Seeder
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
        foreach ($competitionsData->data as $key => $type) {
            CompetitionType::create([
                'name'=>$type->name,
                'description'=>$type->name
            ]);
        }
    }
}
