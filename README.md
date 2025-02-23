# Laravel CRUD Project

## Giới thiệu
Đây là một ứng dụng CRUD (Create, Read, Update, Delete) đơn giản được xây dựng bằng Laravel. Dự án này giúp người dùng có thể tạo, chỉnh sửa, xem và xóa bài viết.

## Công nghệ sử dụng
- Laravel 11
- PHP 8.4.3
- MySQL
- Bootstrap (hoặc Tailwind CSS nếu bạn sử dụng)

## Cài đặt
### 1. Clone repository
```sh
git clone https://github.com/your-username/your-repo.git
cd your-repo
```

### 2. Cài đặt Composer
```sh
composer install
```

### 3. Tạo file .env
```sh
cp .env.example .env
```
Sau đó, chỉnh sửa file `.env` để cấu hình database:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

### 4. Tạo khóa ứng dụng
```sh
php artisan key:generate
```

### 5. Chạy migration để tạo bảng trong database
```sh
php artisan migrate
```

### 6. Chạy dự án
```sh
php artisan serve
```
Sau đó truy cập: [http://127.0.0.1:8000](http://127.0.0.1:8000)

## Chức năng
- **Xem danh sách bài viết**
- **Thêm bài viết mới**
- **Chỉnh sửa bài viết**
- **Xóa bài viết**

## Thư mục quan trọng
- `routes/web.php` - Định nghĩa các route của ứng dụng
- `app/Http/Controllers/PostController.php` - Controller xử lý logic CRUD
- `resources/views/posts` - Thư mục chứa các file Blade Template
- `database/migrations` - Chứa các file migration để tạo bảng
- `app/Models/Post.php` - Model của bài viết

## Đóng góp
Nếu bạn muốn đóng góp vào dự án, hãy fork repository, tạo một branch mới và gửi pull request.

## License
Dự án này được phát hành theo giấy phép MIT.

