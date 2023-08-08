<div class="top-header">
    <div class="flex-col hide-for-medium flex-left">
        <div class="container">
            <div class="row head-r">
                <div class="col head-t1">
                    <p > Chuyên cung cấp thực phẩm sạch | Halona Fruist</p>
                </div>
                <div class="col head-t2">
                    <nav class="nav">
                        <ul class="nav justify-content-end  nav-list">
                            <?php
                            if (isset($_SESSION["loged"]) && $_SESSION["loged"] === true) {
                                echo '<li class="nav-item"><a class="nav-link" href="#">Trang chủ</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="#">Thanh Toán</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="#">Cửa hàng</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="logout.php">Đăng xuất</a></li>';
                            } else {
                                echo '<li class="nav-item"><a class="nav-link" href="#">Trang chủ</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="#">Thanh Toán</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="#">Cửa hàng</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="./taikhoan.php">Đăng nhập</a></li>';
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
                </nav>
            </div>
        </div>
    </div>

</div>