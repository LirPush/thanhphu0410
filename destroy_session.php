

<?php
session_start(); // Bắt đầu hoặc tiếp tục phiên

// Hủy bỏ toàn bộ dữ liệu phiên
session_destroy();

// Xóa các biến phiên nếu cần thiết
$_SESSION = array();

// Trả về kết quả thành công cho yêu cầu AJAX
http_response_code(200);

header("location:index.php");

?>