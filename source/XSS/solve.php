<?php
	// Kết nối đến cơ sở dữ liệu
	$conn = mysqli_connect("localhost", "root", "", "xss");

	// Kiểm tra kết nối
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Lấy dữ liệu từ biểu mẫu
	$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
	$comment = htmlspecialchars($_POST['comment'], ENT_QUOTES, 'UTF-8');

	// Chèn dữ liệu vào cơ sở dữ liệu
	$sql = "INSERT INTO comments (username, comment) VALUES ('$name','$comment')";
	$result = mysqli_query($conn, $sql);

	// Đóng kết nối
	mysqli_close($conn);

	header("Location: index.php");
?>