<!DOCTYPE html>
<html>
<head>
    <title>Phân Trang Sản Phẩm</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div id="productList">
        <!-- Đây là nơi để hiển thị danh sách sản phẩm -->
    </div>
    <div id="pagination">
        <!-- Đây là nơi để hiển thị các nút phân trang -->
    </div>

    <script>
        // Hàm gửi yêu cầu AJAX và hiển thị sản phẩm và nút phân trang
        function loadProducts(page) {
            $.ajax({
                url: 'get_products.php',
                type: 'GET',
                data: { page: page },
                success: function(response) {
                    $('#productList').html(response.products);
                    $('#pagination').html(response.pagination);
                }
            });
        }

        // Gọi hàm loadProducts với page ban đầu là 1 khi trang vừa được tải
        $(document).ready(function() {
            loadProducts(1);
        });

        // Xử lý sự kiện click của các nút phân trang
        $(document).on('click', '#pagination a', function(e) {
            e.preventDefault(); // Ngăn chặn chuyển hướng trang khi nhấp vào nút phân trang
            var page = $(this).data('page');
            loadProducts(page);
        });
    </script>
</body>
</html>
