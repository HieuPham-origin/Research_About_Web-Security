<!DOCTYPE html>
<html>
<head>
	<title>Comment System</title>
</head>
<body>
	<h1>Comment System</h1>
	<?php
		// Lấy tất cả các comment từ cơ sở dữ liệu và hiển thị lên trang web
		$conn = mysqli_connect('localhost', 'root', '', 'xss');
		$query = "SELECT * FROM comments";
		$result = mysqli_query($conn, $query);

		while($row = mysqli_fetch_assoc($result)) {
			echo "<p>" . $row['username'] . ": " . $row['comment'] . "</p>";
		}

		// Đóng kết nối
		mysqli_close($conn);
	?>

	<form method="post" action="comment.php">
		<label for="name">Name: </label>
		<input type="text" name="name">
		<br>
		<label for="comment">Comment: </label>
		<textarea name="comment"></textarea>
		<br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>