<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# football-ticket-booking
🎟️ Hệ Thống Đặt Vé Bóng Đá - Laravel Project
📌 Giới Thiệu
Hệ thống đặt vé bóng đá trực tuyến giúp người dùng dễ dàng lựa chọn khán đài, số lượng vé và thanh toán trực tuyến. Vé sẽ được xác thực bằng mã QR, giúp hạn chế tình trạng vé giả và mang đến trải nghiệm tốt hơn cho người hâm mộ.

🚀 Công Nghệ Sử Dụng
Backend: Laravel 10 (PHP 8.2)
Frontend: Blade Template + Bootstrap
Database: MySQL
QR Code: SimpleSoftwareIO\QrCode
Authentication: Laravel Auth (Sanctum hoặc Session-based)
📂 Cấu Trúc Dự Án
css
Sao chép
Chỉnh sửa
/football-ticket-booking  
│── app/  
│   ├── Http/Controllers/ (Chứa các controller)  
│   ├── Models/ (Chứa các model)  
│── database/migrations/ (Chứa các file migration)  
│── resources/views/  
│   ├── layouts/ (Chứa layout chính)  
│   ├── bookings/ (Chứa các file giao diện đặt vé)  
│── routes/  
│   ├── web.php (Khai báo route)  
│── public/ (Chứa assets như CSS, JS, images)  
│── .env (Cấu hình môi trường)  
│── README.md (Tài liệu hướng dẫn)  
🔧 Cài Đặt
1️⃣ Clone Repository
sh
Sao chép
Chỉnh sửa
git clone https://github.com/lamk54a1/football-ticket-booking.git
cd football-ticket-booking
2️⃣ Cấu Hình Môi Trường
Tạo tệp .env từ .env.example:

sh
Sao chép
Chỉnh sửa
cp .env.example .env
Cập nhật thông tin kết nối database:

ini
Sao chép
Chỉnh sửa
DB_CONNECTION=mysql
DB_HOST=mysql-2dc53ea6-st-7b5b.e.aivencloud.com
DB_PORT=17355
DB_DATABASE=defaultdb
DB_USERNAME=avnadmin
DB_PASSWORD=AVNS_90-Vdai_i2rGtm0PWZt
DB_SSLMODE=REQUIRED

3️⃣ Cài Đặt Các Gói Composer
sh
Sao chép
Chỉnh sửa
composer install
4️⃣ Chạy Migration
sh
Sao chép
Chỉnh sửa
php artisan migrate --seed
5️⃣ Chạy Server Laravel
sh
Sao chép
Chỉnh sửa
php artisan serve
Truy cập http://127.0.0.1:8000 để sử dụng ứng dụng.

🎯 Các Chức Năng Chính
✅ Đăng ký/Đăng nhập (Authentication)
✅ Quản lý trận đấu (CRUD trận đấu, khán đài, vé)
✅ Chọn vé & Đặt vé
✅ Sinh mã QR Code cho vé
✅ Giỏ hàng và Thanh toán
✅ Bảo mật: Validation, CSRF, XSS, Session, Cookies

📜 API Endpoint (Nếu có API)
Phương thức	Endpoint	Mô tả
POST	/api/login	Đăng nhập người dùng
POST	/api/register	Đăng ký người dùng
GET	/api/matches	Lấy danh sách trận đấu
POST	/api/checkout	Thanh toán vé
⚠️ Lỗi Thường Gặp
1️⃣ Lỗi thiếu cột phone hoặc cccd trong bảng users
👉 Chạy migration để cập nhật cột:

sh
Sao chép
Chỉnh sửa
php artisan migrate
2️⃣ Không thể tạo mã QR (BaconQrCode\Exception\RuntimeException)
👉 Cài đặt Imagick trong Codespaces:

sh
Sao chép
Chỉnh sửa
sudo apt-get install php-imagick
composer require simplesoftwareio/simple-qrcode
3️⃣ Lỗi “The GET method is not supported for route cart/checkout”
👉 Kiểm tra route: Chỉ hỗ trợ POST, hãy gửi request bằng POST.

📌 Đóng Góp
Bạn có thể tạo Pull Request hoặc Issue trên GitHub nếu muốn đóng góp cải thiện dự án.

📜 Giấy Phép
Dự án này được phát hành dưới giấy phép MIT.
