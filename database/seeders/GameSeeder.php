<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    public function run()
    {
        // Tạo 2 trận đấu mẫu
        Game::create([
            'name' => 'Sông Lam Nghệ An vs Hà Nội',
            'date' => '2025-02-01',
            'time' => '18:00:00',
            'location' => 'Sân vận động Vinh'
        ]);

        Game::create([
            'name' => 'Sông Lam Nghệ An vs Hồng Lĩnh Hà Tĩnh',
            'date' => '2025-02-05',
            'time' => '20:00:00',
            'location' => 'Sân vận động Vinh'
        ]);
    }
}
