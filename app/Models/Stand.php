<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',   // Tên khán đài
        'price',  // Giá vé
        'game_id', // ID của trận đấu
    ];

    // Quan hệ với bảng Game
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
