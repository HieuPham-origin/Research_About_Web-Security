# Research_About_Web-Security
Nghiên cứu tìm hiểu về web security cho môn LT web ứng dụng
- File README.md để chỉ dẫn cách thực hiện, chạy mã nguồn như thế nào?
- Sinh viên thực hiện:
Phạm Đức Minh Hiếu
Nguyễn Văn Hào
Link video demo: https://drive.google.com/drive/folders/10iTxUXNn___tBuT07ionfZ0uG0JqrFFc?usp=sharing
- Để chạy được source code cần thực hiện các bước sau:
B1: Truy cập vào trang Github của chúng em: https://github.com/HieuPham-origin/Research_About_Web-Security
B2: Clone source code về htdocs trong thư mục xampp bằng lệnh git clone https://github.com/HieuPham-origin/Research_About_Web-Security
B3: Sau khi clone code xong sẽ xuất hiện thư mục Research_About_Web-Security
B4: Cài đặt các database vào phpMyAdmin, mở ứng dụng Xampp và start Apache và MySQL, sau đó ở MySQL, nhấn vào Admin, web 
phpMyAdmin sẽ được mở.
   B4.1: Thực hiện chạy phần SQLInjection
	B4.1.1: tại phpMyAdmin, tạo 1 cơ sở dữ liệu mới, sau đó import file database.sql trong thư mục SQLInjection vào
	B4.1.2: sau khi import xong, database đã được tạo. Khi này để chạy phần demo SQL injection, chỉ việc vào localhost/Research_About_Web-Security/SQLInjection
	B4.1.3: Nhấn vào đăng nhập, file login.php mở ra và đăng nhập vào với tài khoản là admin và mật khẩu là 12345678 
	B4.1.4: Thực hiện từng bước chạy chương trình như trong video demo
   B4.2: Thực hiện chạy phần XSS
	B4.1.1: tại phpMyAdmin, tạo 1 cơ sở dữ liệu mới, sau đó import file database.sql trong thư mục XSS vào
	B4.1.2: sau khi import xong, database đã được tạo. Khi này để chạy phần demo XSS, chỉ việc vào localhost/Research_About_Web-Security/XSS
	B4.1.3: Thực hiện từng bước chạy chương trình như trong video demo

