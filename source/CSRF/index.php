<?php
    require_once('userController.php');
    // Tạo post mới kèm với token
    if(isset($_POST['post_news'])){
        require_once('postController.php');
        (new postController())->add_post($_SESSION['username'],$_POST['post-content'],$_SESSION['csrf_token'] );
    } 
    // //Tạo post chưa có token
    // if(isset($_POST['post_news'])){
    //     require_once('postController.php');
    //     (new postController())->add_post($_SESSION['username'],$_POST['post-content']);
    // } 
    // Tạo token
    $token = md5(uniqid(rand(),true));
    $_SESSION['csrf_token'] = $token;
    if(isset($_POST['logout'])){
        session_destroy();
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>FakeBook</title>
</head>
<body>
    <nav class="nav-bar sticky-top navbar-expand-lg navbar-light bg-light p-3 d-lg-block d-sm-none nav1">
        <div class="container-fluid align-items-center">
            <div class="row">
                <div class="col-3 fw-bolder fs-5">
                    <i class="fa fa-plane" aria-hidden="true"></i> FakeBook News
                </div>
                <div class="col-0 col-md-4"></div>
                <div class="col-5 text-end">
                    <form action="" method="post">
                        <div class="username">
                            <?php if(isset($_SESSION['username'])){
                                    echo  $_SESSION['username'];
                                    ?>
                                    <button class="btn btn-dark ms-5" name="logout">Đăng xuất</button>
                                    <?php
                                }
                                else {
                                    ?>
                                    <button class="btn btn-dark login">Đăng nhập</button>
                                    <?php
                                }  
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                <div class="card text-center mb-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title username">
                            <?php 
                                if(isset($_SESSION['username'])){
                                    echo  $_SESSION['username'];
                                }
                                else{
                                    echo "Khách";
                                }
                            ?>
                        </h5>
                        <p class="card-text">Thích Chém Gió</p>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <form action="" method="post">
                    <div class="row mb-5">
                        <div class="card">
                                <h5 class="card-header">Hôm nay bạn thế nào?</h5>
                                <div class="card-body">
                                    <textarea name="post-content" cols="120" rows="5"></textarea>
                                    <input type="hidden" name="token" value='<?php echo $_SESSION['csrf_token'] ?>'>
                                </div>
                                <button type="submit" name="post_news" class="btn btn-dark">Đăng</button>
                        </div>
                    </div>
                </form>
                <?php
                    require_once('postController.php');
                    $posts = (new postController())->get_all_posts();
                    foreach($posts as $post){
                        ?>
                            <div class="row mb-2">
                                <div class="card">
                                    <h5 class="card-header"><?php echo $post->username ?></h5>
                                    <div class="card-body">
                                        <p class="card-text"><?php echo $post->post_content?></p>
                                    </div>
                                </div>
                            </div>
                        <?php 
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>