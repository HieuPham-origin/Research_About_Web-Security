<?php
// Kết nối đến cơ sở dữ liệu
$conn = new mysqli('localhost', 'root', '', 'sql_injection');

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Lấy ID của sản phẩm từ tham số truyền vào
if (isset($_GET['id'])) {
    $productId = $_GET['id'];
} else {
    // Nếu không có ID sản phẩm, hiển thị thông báo lỗi
    echo "Không tìm thấy sản phẩm.";
    exit();
}

// Truy vấn cơ sở dữ liệu để lấy thông tin của sản phẩm
$sql = "SELECT * FROM products WHERE id = $productId";
$result = $conn->query($sql);
// $sql = "SELECT * FROM products WHERE id = ?";
// $stmt = $conn->prepare($sql);
// $stmt->bind_param("i", $productId);
// $stmt->execute();
// $result = $stmt->get_result();
// Kiểm tra kết quả truy vấn
if ($result->num_rows > 0) {
    // Lấy thông tin của sản phẩm
    $row = $result->fetch_assoc();
    $productName = $row['name'];
    $productDescription = $row['description'];
    $productImageUrl = $row['image_url'];
    $productPrice = $row['price'];
} else {
    // Nếu không có sản phẩm nào khớp với ID truyền vào, hiển thị thông báo lỗi
    echo "Không tìm thấy sản phẩm.";
    exit();
}

// Đóng kết nối đến cơ sở dữ liệu
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $productName; ?></title>
</head>
<body>
    <h1><?php echo $productName; ?></h1>
    <img src="<?php echo $productImageUrl; ?>" alt="<?php echo $productName; ?>" style="max-height: 300px">
    <p><?php echo $productDescription; ?></p>
    <p>Giá: <?php echo $productPrice; ?></p>
</body>
</html>