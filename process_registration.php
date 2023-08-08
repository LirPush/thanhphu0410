<?php
if (isset($_POST["submit"])) {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $address = $_POST["address"];
    $pass = $_POST["password"];

    // Kết nối đến cơ sở dữ liệu (Thay đổi thông tin kết nối phù hợp)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webdemo";


    $conn = new mysqli($servername, $username, $password, $dbname);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    // Thêm dữ liệu vào bảng customers
    $sql = "INSERT INTO customers (fullname, email, phone_number, address, password)
            VALUES ('$fullname', '$email', '$phone_number', '$address', '$pass')";

    if ($conn->query($sql) === TRUE) {
        echo "Đăng ký thành công!";
    } else {
        echo "Lỗi khi đăng ký: " . $conn->error;
    }

    
      header("Location: taikhoan.php");
    exit();
}
?>
