use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\StandController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/stands', [StandController::class, 'index']); // Lấy danh sách khán đài
    Route::get('/stands/create/{stand}', [StandController::class, 'show']); // Chi tiết khán đài
    Route::post('/bookings', [BookingController::class, 'store']); // Đặt vé
    Route::get('/bookings', [BookingController::class, 'index']); // Xem danh sách đặt vé
});
