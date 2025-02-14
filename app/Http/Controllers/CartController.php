<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Stand;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Thêm vé vào giỏ hàng
    public function addToCart(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $validated = $request->validate([
            'stand_id' => 'required|exists:stands,id', // Kiểm tra nếu stand_id tồn tại trong bảng stands
            'quantity' => 'required|integer|min:1', // Kiểm tra số lượng vé
        ]);

        // Kiểm tra nếu người dùng đã đăng nhập
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để thêm vé vào giỏ hàng.');
        }

        // Kiểm tra giỏ hàng của người dùng
        $cartItem = Cart::where('user_id', auth()->id()) // Lấy ID người dùng từ auth()
                        ->where('stand_id', $validated['stand_id'])
                        ->first();

        if ($cartItem) {
            // Cập nhật số lượng nếu vé đã có trong giỏ hàng
            $cartItem->quantity += $validated['quantity'];
            $cartItem->save();
        } else {
            // Thêm vé mới vào giỏ hàng
            Cart::create([
                'user_id' => auth()->id(),
                'stand_id' => $validated['stand_id'],
                'quantity' => $validated['quantity'],
            ]);
        }

        return redirect()->route('cart.index')->with('success', 'Vé đã được thêm vào giỏ hàng!');
    }

    // Hiển thị giỏ hàng
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để xem giỏ hàng.');
        }

        // Lấy các mục trong giỏ hàng của người dùng hiện tại
        $cartItems = Cart::where('user_id', auth()->id())->with('stand')->get();
        return view('cart.index', compact('cartItems'));
    }

    // Xóa vé khỏi giỏ hàng
    public function remove($id)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để xóa vé khỏi giỏ hàng.');
        }

        // Kiểm tra và xóa mục trong giỏ hàng
        $cartItem = Cart::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $cartItem->delete();

        return redirect()->route('cart.index')->with('success', 'Vé đã được xóa khỏi giỏ hàng!');
    }

    // Thanh toán giỏ hàng
    public function checkout()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để thanh toán.');
        }

        $cartItems = Cart::where('user_id', auth()->id())->get();

        // Xử lý thanh toán và tạo booking
        foreach ($cartItems as $item) {
            Booking::create([
                'user_id' => $item->user_id,
                'stand_id' => $item->stand_id,
                'quantity' => $item->quantity,
            ]);

            $item->delete(); // Xóa mục khỏi giỏ hàng sau khi thanh toán
        }

        return redirect()->route('stands.index')->with('success', 'Thanh toán thành công!');
    }
}
