<!-- Trang web giả mạo -->
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