<?php
// Thực hiện kết nối cơ sở dữ liệu
require_once 'connect.php';

// Truy vấn để lấy danh sách các id danh mục
$sql_category_ids = "SELECT id FROM categories";
$result_category_ids = $conn->query($sql_category_ids);

// Tạo một mảng chứa các id danh mục
$category_ids = array();
if ($result_category_ids->num_rows > 0) {
    while ($row = $result_category_ids->fetch_assoc()) {
        $category_ids[] = $row['id'];
    }
}

// Chuyển mảng thành chuỗi JSON và trả về
echo json_encode($category_ids);

// Đóng kết nối tới cơ sở dữ liệu
$conn->close();
?>
