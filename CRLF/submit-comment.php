<!-- Trang xử lý yêu cầu gửi comment mới -->
<html>
<head>
	<title>CSRF Attack Demo</title>
</head>
<body>
	<!-- Tạo một comment giả mạo chứa đường link độc hại -->
	<form method="post" action="submit-comment.php">
		<label for="comment">Comment:</label>
		<textarea name="comment" id="comment">Check out this cool website: <a href="index.php">Click here</a></textarea>
		<br>
		<input type="submit" value="Submit">
	</form>
    
</body>
</html>
<?php
	// Kết nối đến cơ sở dữ liệu
	$conn = mysqli_connect("localhost", "root", "", "myblog");

	// Lấy dữ liệu từ biểu mẫu
	$comment = $_POST['comment'];

	// Chèn comment mới vào cơ sở dữ liệu
	$sql = "INSERT INTO comments (comment) VALUES ('$comment')";
	$result = mysqli_query($conn, $sql);

	// Đóng kết nối
	mysqli_close($conn);

	header("Location: index.php");
?>