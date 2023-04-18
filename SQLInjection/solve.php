
  

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
    echo "Invalid username or password.";
    $_SESSION['username'] = null; // hoặc unset($_SESSION['username']);
    header("Location: login.html");
    exit();
  }

  // Đóng kết nối
  $conn = null;

  // // Lấy thông tin đăng nhập từ form
  // $username = mysqli_real_escape_string($_POST['username']);
  // $password = mysqli_real_escape_string($_POST['password']);

  // // Kết nối đến cơ sở dữ liệu
  // $conn = mysqli_connect('localhost', 'root', '', 'SQL_Injection');

  // // Kiểm tra thông tin đăng nhập
  // $query = "SELECT * FROM users WHERE username=? AND password=?";
  // $stmt = mysqli_prepare($conn, $query);
  // mysqli_stmt_bind_param($stmt, "ss", $username, $password);
  // mysqli_stmt_execute($stmt);
  // $result = mysqli_stmt_get_result($stmt);

  // if(mysqli_num_rows($result) > 0) {
  //   // Đăng nhập thành công
  //   header("Location: home.html");
  //   exit();
  // } else {
  //   // Đăng nhập thất bại
  //   echo "Invalid username or password.";
  // }

  // // Đóng kết nối
  // mysqli_close($conn);
?>