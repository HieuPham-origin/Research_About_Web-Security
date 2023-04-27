<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập vào Online Store</title>

    <!-- Thiết lập lại đường dẫn CSS của Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .margin {
            padding: 40px;
            border: 1px solid blue;
        }

        h1 {
            text-align: center;
        }

        .login-form {
            border: 1px solid red;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Đăng nhập</h1>
        <div class="margin">
            <form method="post" action="solve.php">
                <div class="form-group">
                    <label for="username">Tên đăng nhập:</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu:</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                </div>
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
            </form>
        </div>

    </div>
    <?php
    if(isset($_GET['error']) && $_GET['error'] == 1) {
        echo "<div class='alert alert-danger' role='alert'>Đăng nhập thất bại. Vui lòng kiểm tra lại tên đăng nhập và mật khẩu.</div>";
    }
    ?>
    <!-- Thêm đường dẫn JavaScript của Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>

<!-- SELECT * FROM users WHERE username= '' OR 1=1 --' AND password = ''; -->