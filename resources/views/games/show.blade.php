@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">🎟️ Chọn khán đài cho trận đấu: {{ $game->name }}</h1>
    <div class="row">
        @foreach ($stands as $stand)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $stand->name }}</h5>
                    <p class="card-text">Giá vé: <strong>{{ number_format($stand->price, 0, ',', '.') }} VNĐ</strong></p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="stand_id" value="{{ $stand->id }}">
                        <div class="d-flex">
                            <input type="number" name="quantity" class="form-control me-2" value="1" min="1">
                            <button type="submit" class="btn btn-primary">Thêm vào giỏ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
