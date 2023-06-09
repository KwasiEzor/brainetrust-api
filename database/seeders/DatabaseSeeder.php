<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Player;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"=>"Test",
            "email"=>"test@email.com",
            "password"=>"password"
        ]);
       User::factory(20)
           ->has(Player::factory())
           ->create();
        $this->call(ClubSeeder::class);
        $this->call(GameRoundSeeder::class);
        $this->call(GameResultSeeder::class);
        $this->call(CompetitionSeeder::class);
        $this->call(CompetitionTypeSeeder::class);
        $this->call(ScrabbleSeeder::class);

    }
}
