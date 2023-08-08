<?php
// Thực hiện kết nối cơ sở dữ liệu
require_once 'connect.php';

// Lấy thông tin từ tham số truyền vào
$category_id = $_GET['category_id'];

// Số sản phẩm hiển thị trên mỗi trang
$products_per_page = 3;

// Truy vấn để lấy tổng số trang sản phẩm thuộc danh mục đã chọn
$sql_count_products = "SELECT COUNT(*) AS total FROM products WHERE category_id = $category_id";
$result_count_products = $conn->query($sql_count_products);
$row_count_products = $result_count_products->fetch_assoc();
$total_products = $row_count_products['total'];
$total_pages = ceil($total_products / $products_per_page);

// Trả về số trang
echo $total_pages;

// Đóng kết nối tới cơ sở dữ liệu
$conn->close();
?>
