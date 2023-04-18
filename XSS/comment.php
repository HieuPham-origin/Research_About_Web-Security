<?php
	// Kết nối đến cơ sở dữ liệu
	$conn = mysqli_connect("localhost", "root", "", "xss");

	// Kiểm tra kết nối
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Lấy dữ liệu từ biểu mẫu
	$name = $_POST['name'];
	$comment = $_POST['comment'];

	// Chèn dữ liệu vào cơ sở dữ liệu
	$sql = "INSERT INTO comments (username, comment) VALUES ('$name','$comment')";
	$result = mysqli_query($conn, $sql);

	// Đóng kết nối
	mysqli_close($conn);

	echo "Comment submitted successfully!";
?>