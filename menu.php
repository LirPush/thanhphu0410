<div class="menus">
    <div class="container-fluid menu">
        <div class="container">
            <div class="row head-2">
                <div class=" col-lg-2 col-sm-4 logo w-100 d-flex justify-content-center">
                    <div class="logo-header">
                        <a href="#" style=" text-decoration: none; color: #000000;">
                            <img width="100%" height="90px" src="http://hoaqua.langsonweb.com/wp-content/uploads/2020/09/logo-hoa-qua.png" class="logo-header">
                        </a>
                    </div>
                </div>
                <div class=" col-lg-4 col-sm-8 search nvbr">
                    <nav class="navbar navbar-light  nav-search nav-search-pc1">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2 search-input nav-search-pc-input" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0 search-btn nav-search-pc-btn" type="submit"><i class="fa fa-search"></i>
                            </button>
                        </form>
                    </nav>
                </div>
                <div class=" col-lg-6  navbars nvbr-home  ">
                    <div class="row navbar-right">
                        <nav class="navbar navbar-expand-lg navbar-light nvbr ">

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="./index.php">Trang chủ <span class="sr-only">(current)</span></a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Sản phẩm
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <?php for ($i = 0; $i < count($data); $i++) { ?>
                                                <a class="dropdown-item" href="./sanpham.php">
                                                    <?= $data[$i]['name']  ?>
                                                </a>
                                                <?php if ($i + 1 < count($data)) { ?>
                                                    <div class="dropdown-divider"></div>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="intro.php">Giới thiệu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Tin tức</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Liên hệ</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
                                    </li>

                                </ul>

                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>