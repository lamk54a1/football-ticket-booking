<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stand;

class StandSeeder extends Seeder
{
    public function run()
    {
        $games = \App\Models\Game::all(); // Lấy tất cả các trận đấu

        foreach ($games as $game) {
            Stand::create([
                'name' => 'Khán đài A',
                'price' => 100000,
                'game_id' => $game->id // Gán game_id cho khán đài
            ]);
            
            Stand::create([
                'name' => 'Khán đài B',
                'price' => 120000,
                'game_id' => $game->id // Gán game_id cho khán đài
            ]);
        }
    }
}
