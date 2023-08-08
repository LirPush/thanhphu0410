<?php
session_start();

// Xóa tất cả các biến session
session_unset();

// Xóa phiên làm việc
session_destroy();

// Chuyển hướng về trang đăng nhập sau khi đăng xuất
header("Location: taikhoan.php");
exit();
?>
