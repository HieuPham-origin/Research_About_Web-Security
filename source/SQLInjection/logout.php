<?php
    session_start(); // Bắt đầu phiên
    session_unset(); // Xóa tất cả các biến phiên
    session_destroy(); // Hủy phiên

    // Chuyển hướng đến trang đăng nhập hoặc trang chủ
    header("Location: login.php"); // hoặc header("Location: home.php");
    // header("Location: solve.php"); // hoặc header("Location: home.php");
    exit();
?>