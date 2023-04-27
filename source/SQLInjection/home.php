<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Online Store</title>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            font-size: 16px;
        }

        header {
            background-color: #333;
            color: #fff;
        }

        main {
            background-color: #f9f9f9;
        }

        section {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
        }

        a:hover {
            color: #333;
        }

        button:hover {
            background-color: #333;
            color: #fff;
        }

        main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        img {
            border: 1px solid #ccc;
        }

        h1,
        h2,
        h3 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }

        p {
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
        }

        @media only screen and (max-width: 768px) {
            main {
                flex-direction: column;
            }

            section {
                margin: 0;
            }

            div {
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>
<header class="bg-dark p-3">
    <nav class="container d-flex justify-content-between">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link text-light" href="#">Trang chủ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#">Sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#">Giới thiệu</a>
            </li>
        </ul>

        <form class="d-flex" method="GET" action="search.php">
            <input class="form-control me-2" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search" name="query">
            <button class="btn btn-outline-light" type="submit">Tìm kiếm</button>
        </form>

        <a href="login.html" class="btn btn-primary">
            <?php
                session_start();

                // Kiểm tra xem người dùng đã đăng nhập chưa
                if(isset($_SESSION['username'])) {
                    echo 'Xin chào, ' . $_SESSION['username'] . '!';
                    echo '<a href="logout.php" class="btn btn-danger">Đăng xuất</a>';
                } else {
                    echo 'Đăng nhập';
                }
            ?>
        </a>
    </nav>
</header>

    <main>
        <div class="container">
            <h1 class="text-center my-5">Chào mừng bạn đến với Online Store</h1>
            <h2 class="text-center my-5">Sản phẩm mới nhất</h2>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "sql_injection";

                // Tạo kết nối đến cơ sở dữ liệu
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Kiểm tra kết nối
                if ($conn->connect_error) {
                    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
                }

                // Truy vấn để lấy danh sách sản phẩm
                $sql = "SELECT id, name, description, image_url FROM products";
                $result = $conn->query($sql);

                // Kiểm tra số lượng sản phẩm trả về
                if ($result->num_rows > 0) {
                    // Bắt đầu vòng lặp để tạo các thẻ HTML cho từng sản phẩm
                    echo '<div class="row">';
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="col-md-4 mb-3">';
                        echo '<div class="card">';
                        echo '<img class="card-img-top" src="' . $row["image_url"] . '" alt="Card image cap" style="max-height: 300px"">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $row["name"] . '</h5>';
                        echo '<p class="card-text">' . $row["description"] . '</p>';
                        // Thêm thuộc tính data-id vào nút "Xem chi tiết" với giá trị là ID của sản phẩm
                        echo '<a href="#" class="btn btn-primary" data-id="' . $row["id"] . '">Xem chi tiết</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    echo '</div>';
                } else {
                    echo "Không có sản phẩm nào.";
                }

                // Đóng kết nối đến cơ sở dữ liệu
                $conn->close();
            ?>
    </main>

    <footer style="background-color: #333; color: #fff; padding: 20px; text-align: center;">
        <p>&copy; 2023 Online Store. All rights reserved.</p>
    </footer>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        var viewButtons = document.querySelectorAll('.card-body .btn-primary');

        // Lặp qua từng nút và thêm sự kiện click
        viewButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Lấy giá trị của thuộc tính data-id
                var productId = this.getAttribute('data-id');
                // Thực hiện các hành động khác với ID sản phẩm
                console.log('ID sản phẩm:', productId);
                // Redirect đến trang chi tiết sản phẩm
                window.location.href = 'product_detail.php?id=' + productId;
            });
        });
    </script>
</body>

</html>