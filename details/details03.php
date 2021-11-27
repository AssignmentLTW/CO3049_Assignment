<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    <title>Teamups</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

    <!-- font awesome style -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet" />

    <!-- responsive style -->
    <link href="../css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="../index.php">
                        <span> Teamups </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php">Trang chủ </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="../laptop.php"> Laptops </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../about.php">
                                    Giới thiệu <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../contact.php">Liên hệ</a>
                            </li>
                        </ul>
                        <div class="user_option-box">
                        <?php
                if (isset($_SESSION["username"])) {
                   
                  if ($_SESSION["admin"] =='Y') {
                    echo '<span style="text-transform: uppercase;">';
                    echo $_SESSION["username"];
                    echo'</span>';
                    echo '<a href="../admin/table_user.php">
                            <i class="fa fa-cogs"></i>
                          </a>';
                    
                  }
                  else {
                    echo '<div class="drop_down">';
                      echo '<span style="text-transform: none;">';
                      echo $_SESSION["username"];
                      echo'</span>';

                      echo '<div class="dd_content">';
                        echo '<a href="../login/users_info.php">Tài khoản của tôi</a>';
                        echo '<a href="../login/change_pw.php">Đổi mật khẩu</a>';
                      echo '</div>';
                    echo '</div>';
                  }
                  echo  '<a href="../login/logout.php">
                              <i class="fa fa-sign-out"></i>
                            </a>';
                } else
                  echo '<a href="../login/login.php">
                        <i class="fa fa-user" aria-hidden="true"></i>
                      </a>' ;
                ?>
               
                
               <a href="../cart.php" class="nav-item nav-link active">
                                <i class="fa fa-cart-plus"></i>
                                <?php

                                    if (isset($_SESSION['cart'])){
                                        $count = count($_SESSION['cart']);
                                        echo "<span id=\"cart_count\" class=\"text-black bg-light\">$count</span>";
                                    }else{
                                        echo "<span id=\"cart_count\" class=\"text-black bg-light\">0</span>";
                                    }

                                ?>
                            </a>
                            <a href=""></a>
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <div class="search-box">
                                <form action="">
                                    <input type="text" placeholder="" />
                                    <input type="submit" value="Search" />
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
    </div>

    <!-- details section -->
    <section class="detail_section ">
        <div class="container">
            <div class="title">
                <p><a href="../laptop.php">Laptops</a> &gt; <a href="#">Details</a> &gt; <a href="#">Laptop Asus
                        Vivobook A415EA EB360T</a></p>
            </div>
            <div class="row">

                <div class=" box-large col-md-6 ">

                    <div class="box-top">
                        <img id="big_img" class="img-fluid" src="../images/sp03-detail00.jpg" alt="Product">
                    </div>
                    <div class="box-bottom">
                        <div class="row">
                            <div class="col">
                                <a href="#" onclick="changeImage(1)"><img src="../images/sp03-detail01.jpg"
                                        alt="Product"></a>
                            </div>
                            <div class="col">
                                <a href="#" onclick="changeImage(2)"><img src="../images/sp03-detail02.jpg"
                                        alt="Product"></a>
                            </div>
                            <div class="col">
                                <a href="#" onclick="changeImage(3)"><img src="../images/sp03-detail03.jpg"
                                        alt="Product"></a>
                            </div>
                            <div class="col">
                                <a href="#" onclick="changeImage(4)"><img src="../images/sp03-detail04.jpg"
                                        alt="Product"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="summary col-md-6 ">

                    <h2>Laptop Asus Vivobook A415EA EB360T</h2>
                    <p>Nhà sản xuất : ASUS</p>
                    <p>Xuất xứ : Chính hãng</p>
                    <p>Bảo hành : 24 Tháng</p>
                    <p>Tình trạng : New 100%</p>
                    <h3>Giá: 17,490,000₫</h3>
                    <button class="btn btn-outline-primary btn-block" type="button">Thêm vào giỏ hàng</button>
                    <button class="btn btn-success btn-block" type="button">Mua ngay</button>
                </div>

                <div class=" detail col">
                    <h2>Mô tả</h2>
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item">
                                <a data-toggle="pill" href="#info-product" class="nav-link active "> Thông tin sản phẩm
                                </a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="pill" href="#outstanding" class="nav-link "> Đặc điểm nổi bật </a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="pill" href="#quanranting" class="nav-link "> Thông tin bảo hành </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="info-product" class="tab-pane fade show active pt-3">
                            <h3>Thông số kĩ thuật</h3>
                            <table class="table table-striped">
                                <tr>
                                    <th>Thương hiệu</th>
                                    <th>Asus</th>
                                </tr>
                                <tr>
                                    <th>Bảo hành</th>
                                    <th>24 tháng</th>
                                </tr>
                                <tr>
                                    <th>Model</th>
                                    <th>Laptop Asus Vivobook A415EA EB360T</th>
                                </tr>
                                <tr>
                                    <th>CPU</th>
                                    <th>Intel Core i5-1135G7 0.9GHz up to 4.2GHz 8MB</th>
                                </tr>
                                <tr>
                                    <th>RAM</th>
                                    <th>8GB DDR4 2666MHz Onboard
                                    </th>
                                </tr>
                                <tr>
                                    <th>Ổ cứng</th>
                                    <th>512GB SSD M.2 PCIE G3X4 (Còn trống 1 khe SSD M.2 PCIE)</th>
                                </tr>
                                <tr>
                                    <th>Card đồ họa</th>
                                    <th>Intel Iris Xe Graphics </th>
                                </tr>
                                <tr>
                                    <th>Màn hình</th>
                                    <th>14" FHD (1920 x 1080), IPS, Anti-Glare with 45% NTSC, NanoEdge</th>
                                </tr>
                                <tr>
                                    <th>Cổng giao tiếp</th>
                                    <th> 1 x Type-A USB 3.2 Gen 1
                                        1 x Type-C USB 3.2
                                        2 x USB 2.0 port(s)
                                        1 x HDMI 1.4</th>
                                </tr>
                                <tr>
                                    <th>Ổ quang</th>
                                    <th>None</th>
                                </tr>
                                <tr>
                                    <th>Audio</th>
                                    <th>Waves MaxxAudio®, Acer TrueHarmony™</th>
                                </tr>
                                <tr>
                                    <th>Đọc thẻ nhớ</th>
                                    <th>None</th>
                                </tr>
                                <tr>
                                    <th>Chuẩn LAN</th>
                                    <th>10/100/1000/Gigabits Base T</th>
                                </tr>
                                <tr>
                                    <th>Chuẩn WIFI</th>
                                    <th>802.11AX (2x2)</th>
                                </tr>
                                <tr>
                                    <th>Bluetooth</th>
                                    <th>Bluetooth® 5.1</th>
                                </tr>
                                <tr>
                                    <th>Webcam</th>
                                    <th>HD Webcam</th>
                                </tr>
                                <tr>
                                    <th>Hệ điều hành</th>
                                    <th>Windows 11 Home</th>
                                </tr>
                                <tr>
                                    <th>Pin</th>
                                    <th>3 Cells 42WHrs</th>
                                </tr>
                                <tr>
                                    <th>Trọng lượng</th>
                                    <th>1.4 kg</th>
                                </tr>
                                <tr>
                                    <th>Màu sắc</th>
                                    <th>Đen</th>
                                </tr>
                                <tr>
                                    <th>Kích thước</th>
                                    <th>324 x 215 x 17.9 mm</th>
                                </tr>
                            </table>

                        </div>
                        <div id="outstanding" class="tab-pane fade pt-3">
                            <!-- Chưa có thông tin -->
                        </div>
                        <div id="quanranting" class="tab-pane fade pt-3">
                            <!-- Chưa có thông tin -->
                        </div>

                    </div>
                </div>

    </section>

    <!-- end details section -->

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 footer-col">
                    <div class="footer_detail">
                        <h4>Giới thiệu</h4>
                        <p>
                            Đơn vị cung cấp laptop hàng đầu Việt Nam bảo hành chính hãng. Mua online nhận ngay nhiều ưu
                            đãi hấp dẫn.
                        </p>
                        <div class="footer_social">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 footer-col">
                    <div class="footer_contact">
                        <h4>Liên hệ</h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span> Thu Duc, Ho Chi Minh City </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span> Call +84 123456789 </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span> demo@gmail.com </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 footer-col">
                    <div class="map_container">
                        <div class="map">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!-- footer section -->
    <!-- Chang images details -->
    <script>
    function changeImage(image) {
        document.getElementById("big_img").src = "../images/sp03-detail0" + image + ".jpg";
    }
    </script>
    <!-- jQery -->
    <script src="../js/jquery-3.4.1.min.js"></script>

    <!-- bootstrap js -->
    <script src="../js/bootstrap.js"></script>

    <!-- custom js -->
    <script src="../js/script.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->
</body>

</html>