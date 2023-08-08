<script src="./linhtinh/jquery.min.js"></script>


<script src="./linhtinh/bootstrap.js"></script>

<script src="./linhtinh/aos.js"></script>
<script src="./linhtinh/slick.js"></script>
<script src="./linhtinh/mmenu.js"></script>
<script src="./main.js"></script>

<script>
$(document).ready(function() {
    // Gán hàm session_destroy() cho sự kiện "onclick" của nút
    $("#destroyButton").click(function() {
        session_destroy();
    });
    // Hàm session_destroy() để hủy bỏ phiên
    function session_destroy() {
        $.ajax({
            url: "destroy_session.php", // Đường dẫn tới file PHP xử lý hủy bỏ phiên
            success: function() {
                // Xử lý thành công
                alert("Session destroyed successfully.");
                location.reload();
            },
            error: function() {
                // Xử lý lỗi
                alert("Failed to destroy session.");
            }
        });
    }
});
</script>
    <!-- Thêm script xử lý AJAX -->
    <script>
        // Hàm để tải sản phẩm thuộc danh mục với phân trang
        function loadProductsByCategory(categoryId, page) {
            $.ajax({
                type: "GET",
                url: "get_products.php",
                data: { category_id: categoryId, page: page },
                success: function(response) {
                    // Hiển thị dữ liệu sản phẩm
                    $("#product-list-" + categoryId).html(response);
                },
                error: function() {
                    // Xử lý lỗi (nếu có)
                    $("#product-list-" + categoryId).html("<p>Có lỗi xảy ra khi tải dữ liệu.</p>");
                }
            });
        }

        // Hàm để tạo phân trang
        function createPagination(categoryId, currentPage) {
            $.ajax({
                type: "GET",
                url: "get_total_pages.php",
                data: { category_id: categoryId },
                success: function(response) {
                    // Tính toán số trang
                    var total_pages = parseInt(response);

                    // Tạo mã HTML cho phân trang
                    var paginationHTML = "<div class='pagination'>";
                    for (var i = 1; i <= total_pages; i++) {
                        if (i === currentPage) {
                            paginationHTML += "<a class='active' href='#' onclick='changePage(" + categoryId + ", " + i + ")'>" + i + "</a>";
                        } else {
                            paginationHTML += "<a href='#' onclick='changePage(" + categoryId + ", " + i + ")'>" + i + "</a>";
                        }
                    }
                    paginationHTML += "</div>";

                    // Hiển thị phân trang
                    $("#pagination-" + categoryId).html(paginationHTML);
                },
                error: function() {
                    // Xử lý lỗi (nếu có)
                    $("#pagination-" + categoryId).html("<p>Có lỗi xảy ra khi tải phân trang.</p>");
                }
            });
        }

        // Hàm để chuyển trang sản phẩm của danh mục
        function changePage(categoryId, page) {
            loadProductsByCategory(categoryId, page);

            // Cập nhật phân trang khi chuyển trang
            createPagination(categoryId, page);
        }

        // Hàm để tải danh sách các id danh mục từ cơ sở dữ liệu
        function loadCategoryIds() {
            $.ajax({
                type: "GET",
                url: "get_categories.php",
                success: function(response) {
                    // Chuyển đổi chuỗi JSON thành mảng categoryIds
                    var categoryIds = JSON.parse(response);

                    // Lặp qua từng id danh mục để tải dữ liệu sản phẩm và phân trang
                    categoryIds.forEach(function(categoryId) {
                        loadProductsByCategory(categoryId, 1);

                        // Tạo phân trang cho từng danh mục
                        createPagination(categoryId, 1);
                    });
                },
                error: function() {
                    // Xử lý lỗi (nếu có)
                    alert("Có lỗi xảy ra khi tải danh sách danh mục.");
                }
            });
        }

        // Tải danh sách các id danh mục khi trang được tải
        $(document).ready(function() {
            loadCategoryIds();
        });
    </script>