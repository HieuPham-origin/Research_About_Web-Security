<?php
  // Lấy thông tin đăng nhập từ form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Kết nối đến cơ sở dữ liệu
  $conn = mysqli_connect('localhost', 'root', '', 'SQL_Injection');

  // Kiểm tra thông tin đăng nhập
  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  // die($query);
  $result = mysqli_query($conn, $query);

  session_start();
  if(mysqli_num_rows($result) > 0) {
    // Đăng nhập thành công
    $_SESSION['username'] = $username;
    header("Location: home.php");
    exit();
  } else {
    // Đăng nhập thất bại
    echo "Invalid username or password.";
    $_SESSION['username'] = null; // hoặc unset($_SESSION['username']);
    header("Location: login.html");
    exit();
  }

  // Đóng kết nối
  mysqli_close($conn);
?>

