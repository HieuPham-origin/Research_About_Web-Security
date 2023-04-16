<?php
  // Lấy thông tin đăng nhập từ form
  $username = mysqli_real_escape_string($_POST['username']);
  $password = mysqli_real_escape_string($_POST['password']);

  // Kết nối đến cơ sở dữ liệu
  $conn = mysqli_connect('localhost', 'root', '', 'SQL_Injection');

  // Kiểm tra thông tin đăng nhập
  $query = "SELECT * FROM users WHERE username=? AND password=?";
  $stmt = mysqli_prepare($conn, $query);
  mysqli_stmt_bind_param($stmt, "ss", $username, $password);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  if(mysqli_num_rows($result) > 0) {
    // Đăng nhập thành công
    echo "Welcome, $username!";
  } else {
    // Đăng nhập thất bại
    echo "Invalid username or password.";
  }

  // Đóng kết nối
  mysqli_close($conn);
?>