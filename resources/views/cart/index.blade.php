@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">🛒 Giỏ hàng của bạn</h1>

    @if ($cartItems->isEmpty())
        <div class="alert alert-warning text-center">
            Giỏ hàng của bạn đang trống. <a href="{{ route('stands.index') }}" class="text-primary">Quay lại trang đặt vé</a>.
        </div>
    @else
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Khán đài</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                    <th scope="col" class="text-center">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach ($cartItems as $item)
                    @php
                        $price = $item->stand->price * $item->quantity;
                        $total += $price;
                    @endphp
                    <tr>
                        <td>{{ $item->stand->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ number_format($price, 0, ',', '.') }} VNĐ</td>
                        <td class="text-center">
                            <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-between align-items-center mt-4">
            <h5>Tổng cộng: <span class="text-success">{{ number_format($total, 0, ',', '.') }} VNĐ</span></h5>
            <form action="{{ route('cart.checkout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success">Thanh toán</button>
            </form>
        </div>
    @endif
</div>
@endsection
