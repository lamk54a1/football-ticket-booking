@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Đặt vé cho khán đài: {{ $stand->name }}</h1>
    <h4>Giá vé: {{ number_format($stand->price, 0, ',', '.') }} VND</h4>

    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <input type="hidden" name="stand_id" value="{{ $stand->id }}">

        <div class="mb-3">
            <label for="quantity" class="form-label">Số lượng vé:</label>
            <input type="number" name="quantity" id="quantity" class="form-control" min="1" required>
        </div>

        <button type="submit" class="btn btn-success">Đặt vé</button>
        <a href="{{ route('stands.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
</div>
@endsection
