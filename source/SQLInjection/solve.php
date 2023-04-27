<?php
  // Lấy thông tin đăng nhập từ form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Kết nối đến cơ sở dữ liệu
  $dsn = 'mysql:host=localhost;dbname=SQL_Injection';
  $user = 'root';
  $pass = '';
  $options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  );
  try {
    $conn = new PDO($dsn, $user, $pass, $options);
  } catch (PDOException $e) {
    echo "Kết nối cơ sở dữ liệu thất bại: " . $e->getMessage();
    exit();
  }
  // Kiểm tra thông tin đăng nhập
  $stmt = $conn->prepare("SELECT * FROM users WHERE username=:username AND password=:password");
  $stmt->bindParam(':username', $username);
  $stmt->bindParam(':password', $password);
  $stmt->execute();

  session_start();
  if($stmt->rowCount() > 0) {
    // Đăng nhập thành công
    $_SESSION['username'] = $username;
    header("Location: home.php");
    exit();
  } else {
    // Đăng nhập thất bại
    $_SESSION['username'] = null;
    header("Location: login.php?error=1");
    exit();
  }
  // Đóng kết nối
  $conn = null;
?>
