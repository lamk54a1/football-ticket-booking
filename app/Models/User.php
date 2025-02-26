<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Các trường có thể gán giá trị hàng loạt
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Ẩn các trường khi trả về JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Quan hệ với bảng Booking (User có thể có nhiều Booking)
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
