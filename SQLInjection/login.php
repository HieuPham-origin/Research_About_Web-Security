<?php
  // Lấy thông tin đăng nhập từ form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Kết nối đến cơ sở dữ liệu
  $conn = mysqli_connect('localhost', 'root', '', 'SQL_Injection');

  // Kiểm tra thông tin đăng nhập
  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) > 0) {
    // Đăng nhập thành công
    header("Location: home.html");
    exit();
  } else {
    // Đăng nhập thất bại
    echo "Invalid username or password.";
  }

  // Đóng kết nối
  mysqli_close($conn);
?>

