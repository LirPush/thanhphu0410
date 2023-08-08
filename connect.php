<?php
$servername = "localhost";
$database = "webdemo";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// mysqli_close($conn);

// $sql = "SELECT MaSach, TenSach FROM sach";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
// // Load dữ liệu lên website
// while($row = $result->fetch_assoc()) {
// echo "masach: " . $row["MaSach"]. " - tensach: " . $row["TenSach"];
// }
// } else {
// echo "0 results";

// }

$sql = "SELECT * FROM categories";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Khởi tạo mảng để lưu trữ dữ liệu
    $data = array();

    // Lặp qua từng hàng dữ liệu
    while ($row = $result->fetch_assoc()) {
        // Thêm dữ liệu vào mảng
        $data[] = $row;
    }
}
$sql1 = "SELECT * FROM products";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    // Khởi tạo mảng để lưu trữ dữ liệu
    $data1 = array();

    // Lặp qua từng hàng dữ liệu
    while ($row = $result1->fetch_assoc()) {
        // Thêm dữ liệu vào mảng
        $data1[] = $row;
    }
}


    // Chuyển đổi mảng thành chuỗi JSON
    // $json_data = json_encode($data);

    // Hiển thị chuỗi JSON hoặc thực hiện xử lý tiếp theo
    /*($i=0; $i<count($data);$i++){
        ?>
    <h3><?=$data[$i]['TenSach']  ?></h3><br>
   <?php }
    
} else {
    echo "Không có dữ liệu";
}*/

// Đóng kết nối

// $conn->close();

?>

