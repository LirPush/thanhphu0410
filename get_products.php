<?php
// Thực hiện kết nối cơ sở dữ liệu
require_once 'connect.php';

// Lấy thông tin từ tham số truyền vào
$category_id = $_GET['category_id'];
$page = $_GET['page'];

// Số sản phẩm hiển thị trên mỗi trang
$products_per_page = 8;

// Tính toán vị trí bắt đầu của dữ liệu
$start = ($page - 1) * $products_per_page;

// Truy vấn để lấy dữ liệu sản phẩm thuộc danh mục đã chọn
$sql_products = "SELECT * FROM products WHERE category_id = $category_id LIMIT $start, $products_per_page";
$result_products = $conn->query($sql_products);

if ($result_products->num_rows > 0) {
    // Hiển thị dữ liệu sản phẩm
    echo '<div class="list-sanpham row" >';
    while ($row_products = $result_products->fetch_assoc()) {
        echo '<div class="col-xl-3 col-md-4 col-sm-6 product">
                              
        <div class="card-product">

            <div class="sale">
                <span>SALE</span>
            </div>

            <div class="img-card">
                <a href="./ctsp.php" style=" text-decoration: none; color: #000000;">

                    <img class="card-img-top" src="./imgs/hoa-qua-2.jpg" alt="Card image cap">
                </a>
            </div>

            <div class="test-card">
                <div class="name-product w-100">
                    <a href="./ctsp.php" style=" text-decoration: none; color: #000000;">

                        <P>' . $row_products['title'] . '</P>
                    </a>
                </div>
                <div class="price">
                    <p>' . $row_products['price'] . '</p>
                </div>
                <div class="dis-price ">
                    <p>' . $row_products['discount'] . '</p>
                </div>

                <div class="btn-submit w-100">
                    <a href="./ctsp.php" style=" text-decoration: none; color: #000000;">
                        <button>MUA</button>
                    </a>

                </div>

            </div>     
        </div>
    </div>  ';
    }
    echo "</div>";
    // Tạo phân trang
    $sql_count_products = "SELECT COUNT(*) AS total FROM products WHERE category_id = $category_id";
    $result_count_products = $conn->query($sql_count_products);
    $row_count_products = $result_count_products->fetch_assoc();
    $total_products = $row_count_products['total'];
    $total_pages = ceil($total_products / $products_per_page);

    echo "<div class='pagination'>";
    for ($i = 1; $i <= $total_pages; $i++) {
        echo "<a href='#' onclick='changePage(" . $category_id . ", " . $i . ")'>$i</a>";
    }
    echo "</div>";
} else {
    echo "<p>Không có sản phẩm thuộc danh mục này.</p>";
}

// Đóng kết nối tới cơ sở dữ liệu
$conn->close();
?>
