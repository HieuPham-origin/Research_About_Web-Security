<?php
unset($_SESSION['resLogin']);
    if(isset($_POST['login'])){
        require_once('userController.php');
        $us = (new userController())->userLogin($_POST['username'], $_POST['password']);
    } 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Đăng nhập vào FakeBook</h2>
        <form class="d-block mx-auto" style="width:500px; height:500px;" action="" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="username" placeholder="Nhập username">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="password" placeholder="Nhập password">
            </div>
            <button type="submit" class="btn btn-outline-success" name="login">Đăng nhập</button>
            <div class="bg-danger">
                <?php 
                    if(isset($_SESSION['resLogin'])){
                        echo $_SESSION['resLogin'];
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>