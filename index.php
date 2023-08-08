<?php require 'connect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include "head.php" ?>

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
        <?php include "slides.php" ?>

    </div>
    <div class="main">
        <div class="categories">
            <div class=" categorie ">
                <div class="container">
                    <div class="card-deck-1 ">
                        <?php for ($i = 0; $i < count($data); $i++) { ?>
                            <div>
                                <div class="card ">
                                    <img class="card-img-top w-100" src="./imgs/images.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $data[$i]['name']  ?></h5>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>

                <div class="categories-menu" data-aos="fade-in" data-aos-duration="1000">
                    <div class="container-fluid productss p-0" style="background-color: antiquewhite;">
                        <div class="container menu1">
                            <div class="title-1">
                                <b>
                                    <span> TRÁI CÂY NHẬP KHẨU </span>
                                </b>
                            </div>
                            <div class="title-2">
                                <p>Là nhà cung cấp thực phẩm tươi sạch hàng đầu khu vực phía nam</p>
                            </div>

                            <div class="row products">
                                <div id="product-list-1" class="product-list"></div>
                                <div class="extend col-sm-12">
                                    <div class="btn-submit">
                                        <button>Xem thêm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid p-0 banner-menu">
                            <div class="banner-menu-1" data-aos="fade-up" data-aos-duration="4000">
                                <img class="banner-img1 w-80" src="./imgs/banner-main-002-5.jpg">
                            </div>
                            <div class="banner-menu-2" data-aos="fade-down" data-aos-duration="4000">
                                <img class="banner-img2 w-80" src="./imgs/banner-main-003-2.png">
                            </div>

                        </div>
                        <div class="container-fluid" style="background-color: antiquewhite;">
                            <div class="container menu1">
                                <div class="title-1">
                                    <b>
                                        <span> TRÁI CÂY NHẬP KHẨU 1</span>
                                    </b>
                                </div>
                                <div class="title-2">
                                    <p>Là nhà cung cấp thực phẩm tươi sạch hàng đầu khu vực phía nam</p>
                                </div>
                                <div class="row products">
                                    <div id="product-list-2" class="product-list">

                                    </div>
                                    <div class="extend col-sm-12">
                                        <div class="btn-submit">
                                            <button>Xem thêm</button>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <div class="container-fluid background-image-example">
                                <div class="container menu1">
                                    <div class="title-1">
                                        <b>
                                            <span> TRÁI CÂY NHẬP KHẨU 2</span>
                                        </b>
                                    </div>
                                    <div class="title-2">
                                        <p>Là nhà cung cấp thực phẩm tươi sạch hàng đầu khu vực phía nam</p>
                                    </div>


                                    <div class="row products">
                                        <div id="product-list-3" class="product-list">

                                        </div>
                                        <div class="extend col-sm-12">
                                            <div class="btn-submit">
                                                <button>Xem thêm</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="news container-fluid " style="background-color: #f3e3e3;">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-sm-12">
                                <div class="title-3">
                                    <h3> TIN TỨC</h3>
                                </div>
                                <div class="list-news row m-0">
                                    <a class="new-1 row col-xl-12 col-md-4 col-sm-12  col-12 m-0 " href="#" style=" text-decoration: none; color: #000000;">
                                        <div class="row">
                                            <div class="img-new col-xl-4 col-sm-12 col-12 m-0">
                                                <img src="./imgs/abc1.jpg " width="240" height="100%">
                                            </div>
                                            <div class="text-new col-xl-8 col-sm-12 col-12 m-0">
                                                <h5>tiêu đề</h5>
                                                <div class="date">a/a/a</div>
                                                <div class="noidung">Tự trồng rau trong thùng xốp tại nhà là sự lựa chọn
                                                    của rất
                                                    nhiều gia đình trong thành phố bởi phương pháp trồng rau đơn giản,
                                                    dễ trồng,
                                                    dễ
                                                    quản lý, an toàn và tiện lợi. Nhưng người trồng cũng ...

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="new-1 row col-xl-12 col-md-4 col-sm-12  col-12 m-0" href="#" style=" text-decoration: none; color: #000000;">
                                        <div class="row">
                                            <div class="img-new col-xl-4 col-sm-12 m-0">
                                                <img src="./imgs/abc1.jpg " width="240" height="100%">
                                            </div>
                                            <div class="text-new col-xl-8 col-sm-12 m-0">
                                                <h5>tiêu đề</h5>
                                                <div class="date">a/a/a</div>
                                                <div class="noidung">Tự trồng rau trong thùng xốp tại nhà là sự lựa chọn
                                                    của rất
                                                    nhiều gia đình trong thành phố bởi phương pháp trồng rau đơn giản,
                                                    dễ trồng,
                                                    dễ
                                                    quản lý, an toàn và tiện lợi. Nhưng người trồng cũng ...

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="new-1 row col-xl-12 col-md-4 col-sm-12  col-12 m-0" href="#" style=" text-decoration: none; color: #000000;">
                                        <div class="row">
                                            <div class="img-new col-xl-4 col-sm-12 m-0">
                                                <img src="./imgs/abc1.jpg " width="240" height="100%">
                                            </div>
                                            <div class="text-new col-xl-8 col-sm-12 m-0">
                                                <h5>tiêu đề</h5>
                                                <div class="date">a/a/a</div>
                                                <div class="noidung">Tự trồng rau trong thùng xốp tại nhà là sự lựa chọn
                                                    của rất
                                                    nhiều gia đình trong thành phố bởi phương pháp trồng rau đơn giản,
                                                    dễ trồng,
                                                    dễ
                                                    quản lý, an toàn và tiện lợi. Nhưng người trồng cũng ...

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="new-1 row col-xl-12 col-md-4 col-sm-12  col-12 m-0" href="#" style=" text-decoration: none; color: #000000;">
                                        <div class="row">
                                            <div class="img-new col-xl-4 col-sm-12 m-0">
                                                <img src="./imgs/abc1.jpg " width="240" height="100%">
                                            </div>
                                            <div class="text-new col-xl-8 col-sm-12 m-0">
                                                <h5>tiêu đề</h5>
                                                <div class="date">a/a/a</div>
                                                <div class="noidung">Tự trồng rau trong thùng xốp tại nhà là sự lựa chọn
                                                    của rất
                                                    nhiều gia đình trong thành phố bởi phương pháp trồng rau đơn giản,
                                                    dễ trồng,
                                                    dễ
                                                    quản lý, an toàn và tiện lợi. Nhưng người trồng cũng ...

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="new-1 row col-xl-12 col-md-4 col-sm-12  col-12 m-0" href="#" style=" text-decoration: none; color: #000000;">
                                        <div class="row">
                                            <div class="img-new col-xl-4 col-sm-12 m-0">
                                                <img src="./imgs/abc1.jpg " width="240" height="100%">
                                            </div>
                                            <div class="text-new col-xl-8 col-sm-12 m-0">
                                                <h5>tiêu đề</h5>
                                                <div class="date">a/a/a</div>
                                                <div class="noidung">Tự trồng rau trong thùng xốp tại nhà là sự lựa chọn
                                                    của rất
                                                    nhiều gia đình trong thành phố bởi phương pháp trồng rau đơn giản,
                                                    dễ trồng,
                                                    dễ
                                                    quản lý, an toàn và tiện lợi. Nhưng người trồng cũng ...

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="new-1 row col-xl-12 col-md-4 col-sm-12  col-12 m-0" href="#" style=" text-decoration: none; color: #000000;">
                                        <div class="row">
                                            <div class="img-new col-xl-4 col-sm-12 m-0">
                                                <img src="./imgs/abc1.jpg " width="240" height="100%">
                                            </div>
                                            <div class="text-new col-xl-8 col-sm-12 m-0">
                                                <h5>tiêu đề</h5>
                                                <div class="date">a/a/a</div>
                                                <div class="noidung">Tự trồng rau trong thùng xốp tại nhà là sự lựa chọn
                                                    của rất
                                                    nhiều gia đình trong thành phố bởi phương pháp trồng rau đơn giản,
                                                    dễ trồng,
                                                    dễ
                                                    quản lý, an toàn và tiện lợi. Nhưng người trồng cũng ...

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 row lienhes">
                                <div class="lienhe col-xl-12 col-sm-12">

                                    <form>
                                        <div class="title-form">
                                            <span>LIÊN HỆ TƯ VẤN MUA HÀNG</span>
                                        </div>

                                        <div class="form-group  name1">
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="nhập tên">
                                        </div>
                                        <div class="form-group lh-email">
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nhập mail">
                                        </div>
                                        <div class="form-group lh-text">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="nhập nội dung"></textarea>
                                        </div>
                                        <div class="btn-submit w-100">
                                            <button>Gửi liên hệ</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="ytb col-xl-12 col-sm-6">
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/1Sb-UJp-b5s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="margin-top: 20px;"></iframe>
                                </div>

                                <div class="fb col-xl-12 col-sm-6">
                                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftopweb.com.vn&amp;tabs=timeline&amp;width=340&amp;height=300&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=948110208640186" width="100%" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media" style="display: none;"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php';  ?>
        





        <!-- <input type="checkbox" name="" class="nav_input" id="nav_mobi_input">
    <label for="nav_mobi_input" class="nav__overlay"></label>
    <label for="nav_mobi_input" class="nav_mobi">
        <label for="nav_mobi_input" class="nav_mobile_close">
            <i class="fa-solid fa-xmark"></i>
        </label>

        <ul class="nav-list-    ">
            <li class="nav-item-mobi">
                <a class="nav-link-mobi" href="#">Tài khoản</a>
            </li>
            <li class="nav-item-mobi">
                <a class="nav-link-mobi" href="#">Thanh toán</a>
            </li>
            <li class=" nav-item-mobi">
                <a class="nav-link-mobi" href="#">Cửa hàng</a>
            </li>
        </ul>
    </label> -->
        <?php include "js.php" ?>
</body>

</html>