<?php require 'connect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include "head.php" ?>
<title>Danh Mục Sản Phẩm</title>


<body class="mm-wrapper">
    <div class="wap_load" style="display: none;">
        <!-- <div class="cssload-thecube">
            <div class="loader"></div>
        </div> -->
        <svg class="pl" width="240" height="240" viewBox="0 0 240 240">
            <circle class="pl__ring pl__ring--a" cx="120" cy="120" r="105" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 660" stroke-dashoffset="-330" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--b" cx="120" cy="120" r="35" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 220" stroke-dashoffset="-110" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--c" cx="85" cy="120" r="70" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--d" cx="155" cy="120" r="70" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
        </svg>
    </div>
    <?php include "mmmenu.php" ?>
    <div class="header">
        <?php include "header.php" ?>
        <?php include "menu.php" ?>
    </div>
    <div class="container main-danhmuc">
        <div class="row">
            <div class="col-3">
                <h1>Danh Mục Sản Phẩm</h1>

                <?php
    // Truy vấn để lấy danh sách danh mục
    $sql = "SELECT * FROM categories";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row["name"] . "</li>";
        }
    } else {
        echo "Không có danh mục nào.";
    }

    // Đóng kết nối
    $conn->close();
    ?>
            </div>
            <div class="col-9">
                <div id="product-list-1">
                    <!-- Khu vực hiển thị sản phẩm tương ứng -->
                </div>

            </div>
        </div>
    </div>
        <?php include 'footer.php'; ?>
        <?php include "js.php" ?>
        <script>
            function changeColor(element) {
                // Bỏ class "selected" từ tất cả các danh mục
                var allCategories = document.querySelectorAll('.category');
                allCategories.forEach(function(item) {
                    item.classList.remove('selected');
                });

                // Thêm class "selected" vào danh mục được chọn
                element.classList.add('selected');
            }
        </script>
</body>

</html>