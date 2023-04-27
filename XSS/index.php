<!DOCTYPE html> 
<html> 
	<head> 
		<title>Comment System</title> 
		<!-- Thêm các thẻ meta --> 
		<meta charset="UTF-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Thêm các file CSS của Bootstrap 5.0 -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
	</head> 
	<body> 
		<!-- Thêm class container để tạo khung cho nội dung --> 
		<div class="container"> 
			<h1 class="text-center mt-5 mb-4">Comment System</h1> 
			<?php // Lấy tất cả các comment từ cơ sở dữ liệu và hiển thị lên trang web 
				$conn = mysqli_connect('localhost', 'root', '', 'xss'); 
				$query = "SELECT * FROM comments"; 
				$result = mysqli_query($conn, $query);
				while($row = mysqli_fetch_assoc($result)) {
					echo "<div class='mb-3'>
							<h6>Name: " . $row['username'] . "</h6>
							<p>Comment: " . $row['comment'] . "</p>
						  </div>";
				}
		
				// Đóng kết nối
				mysqli_close($conn);
			?>
			<!-- Sử dụng class form để tạo form và sử dụng các class của Bootstrap để tạo giao diện đẹp hơn -->
			<form class="mt-5" method="post" action="comment.php">
				<div class="mb-3">
					<label for="name" class="form-label">Name:</label>
					<input type="text" class="form-control" name="name" required>
				</div>
				<div class="mb-3">
					<label for="comment" class="form-label">Comment:</label>
					<textarea class="form-control" name="comment" required></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		
		<!-- Thêm các file JavaScript của Bootstrap 5.0 -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	</body> 
</html>