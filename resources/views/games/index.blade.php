@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Danh sách trận đấu</h1>
    <div class="row">
        @foreach ($games as $game)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $game->name }}</h5>
                    <p class="card-text">
                        <strong>Ngày:</strong> {{ $game->date }} <br>
                        <strong>Thời gian:</strong> {{ $game->time }} <br>
                        <strong>Địa điểm:</strong> {{ $game->location }}
                    </p>
                    <!-- Chuyển đến trang chi tiết của trận đấu khi nhấn vào nút -->
                    <a href="{{ route('games.show', $game->id) }}" class="btn btn-primary">Xem khán đài và giá vé</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
