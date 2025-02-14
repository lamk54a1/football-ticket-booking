<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Stand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function create(Stand $stand)
    {
        return view('bookings.create', compact('stand'));
    }

    public function store(Request $request)
    {
        // Kiểm tra nếu người dùng chưa đăng nhập
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để đặt vé.');
        }
    
        $userId = Auth::id(); // Sử dụng Auth::id() để lấy ID người dùng
    
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'stand_id' => 'required|exists:stands,id',
            'quantity' => 'required|integer|min:1',
        ]);
        
        // Tạo bản ghi đặt vé
        Booking::create([
            'user_id' => $userId,
            'stand_id' => $request->stand_id,
            'quantity' => $request->quantity,
        ]);
        
        return redirect()->route('stands.index')->with('success', 'Đặt vé thành công!');
    }
    
}
