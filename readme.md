# Homework Laravel Security

## Tạo Auth, load được page login, register

## Add thêm cột role, status vào bảng Users

## Tạo 1 user mới với role random(), status default('1')

## Tạo migration Post, Controller Post, Model Post

## CRUD Post

## Gán middleware cho route resource post để check đăng nhập mới được truy cập

## Câu 6 ( phân quyền sử dụng Gate ):

### Role = 1 chỉ có quyền tạo bài viết ( không có quyền xem danh sách, update, delete, details)

### Role = 2 chỉ có quyền xem danh sách bài viết ( không có quyền create, update, delete, details)

### Role = 3 có quyền tạo bài viết và xem danh sách bài viết ( không có quyền update, delete, details)

## Câu 7 ( phân quyền sử dụng Policy ):

### Role = 1 chỉ có quyền tạo bài viết ( không có quyền xem danh sách, update, delete, details)

### Role = 2 chỉ có quyền tạo và xem danh sách tất cả bài viết ( không có quyền update, delete, details)

### Role = 4 có quyền tạo bài viết, xem , sửa, xóa bài viết của chính mình
