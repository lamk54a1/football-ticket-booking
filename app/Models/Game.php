<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'date', 'time', 'location'];

    // Quan hệ với bảng Stand
    public function stands()
    {
        return $this->hasMany(Stand::class);
    }
}
