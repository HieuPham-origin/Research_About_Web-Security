<!-- Trang web thật -->
<!DOCTYPE html> 
<html>
<head>
	<title>My Blog</title>
</head>
<body>
	<h1>My Blog</h1>

	<!-- Hiển thị các comment đã được đăng -->
	<?php
		// Kết nối đến cơ sở dữ liệu
		$conn = mysqli_connect("localhost", "root", "", "myblog");

		// Lấy dữ liệu từ cơ sở dữ liệu
		$sql = "SELECT * FROM comments";
		$result = mysqli_query($conn, $sql);

		// Hiển thị các comment đã được đăng
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<p>" . $row['comment'] . "</p>";
		}

		// Đóng kết nối
		mysqli_close($conn);
	?>

	<!-- Biểu mẫu cho phép người dùng gửi comment mới -->
	<form method="post" action="submit-comment.php">
		<label for="comment">Comment:</label>
		<textarea name="comment" id="comment"></textarea>
		<br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>