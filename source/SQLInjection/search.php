<?php
// Kết nối đến cơ sở dữ liệu
$conn = mysqli_connect('localhost', 'root', '', 'sql_injection');

// Kiểm tra kết nối
if (!$conn) {
    die('Kết nối không thành công: ' . mysqli_connect_error());
}

// Lấy từ khóa tìm kiếm từ form
$query = $_GET['query'];

// Tạo câu truy vấn tìm kiếm
$sql = "SELECT * FROM products WHERE name LIKE '%{$query}%'";
// die($sql);
// Thực thi câu truy vấn
$result = mysqli_query($conn, $sql);

// Kiểm tra kết quả tìm kiếm
if (mysqli_num_rows($result) > 0) {
    // Hiển thị kết quả tìm kiếm
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<p>' . $row['name'] . '</p>';
    }
} else {
    echo 'Không tìm thấy sản phẩm nào.';
}

// Đóng kết nối
mysqli_close($conn);
?>