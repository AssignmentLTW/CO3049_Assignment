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
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Teamups</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style-details.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="index.php">
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
                                <a class="nav-link" href="index.php">Trang chủ </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="watches.php"> Laptops </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php"> Giới thiệu </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="contact.php">Liên hệ </a>
                                
                            </li>
                        </ul>
                        <div class="user_option-box">
                            <?php
                            if (isset($_SESSION["username"])) {
                                echo $_SESSION["username"];
                                echo  '<a href="./login/logout.php">
                            <i class="fa fa-sign-out"></i>
                          </a>';
                            } else
                                echo '<a href="./login/login.php">
                      <i class="fa fa-user" aria-hidden="true"></i>
                    </a>'
                            ?>
                            <a href="">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
    </div>

    <!-- details section -->
    <section class="detail_section layout_padding">
        <div class="container">
            <div class="title">
                <p><a href="#">Laptops</a> &gt; <a href="#">Details</a> &gt; <a href="#">Laptop Acer Aspire 3 A315 56 37DV</a></p>
            </div>
            <div class="row">

                <div class=" box-large col-md-6 ">

                    <div class="box-top">
                        <img id="big_img" class="img-fluid" src="images/sp01-detail00.jpg" alt="Product">
                    </div>
                    <div class="box-bottom">
                        <div class="row">
                            <div class="col">
                                <a href="#" onclick="changeImage(1)"><img src="images/sp01-detail01.jpg"
                                        alt="Product"></a>
                            </div>
                            <div class="col">
                                <a href="#" onclick="changeImage(2)"><img src="images/sp01-detail02.jpg"
                                        alt="Product"></a>
                            </div>
                            <div class="col">
                                <a href="#" onclick="changeImage(3)"><img src="images/sp01-detail03.jpg"
                                        alt="Product"></a>
                            </div>
                            <div class="col">
                                <a href="#" onclick="changeImage(4)"><img src="images/sp01-detail04.jpg"
                                        alt="Product"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="summary col-md-6 ">

                    <h2>Laptop Acer Aspire 3 A315 56 37DV</h2>
                    <p>Nhà sản xuất : ACER</p>
                    <p>Xuất xứ : Chính hãng</p>
                    <p>Bảo hành : 12 Tháng</p>
                    <p>Tình trạng : Mới 100%</p>
                    <h3>Giá: 11,990,000₫</h3>
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
                            <table>
                                <tr>
                                    <th>Thương hiệu</th>
                                    <th>Acer</th>
                                </tr>
                                <tr>
                                    <th>Bảo hành</th>
                                    <th>12 tháng</th>
                                </tr>
                                <tr>
                                    <th>Model</th>
                                    <th>Acer Aspire 3 A315 56 37DV</th>
                                </tr>
                                <tr>
                                    <th>CPU</th>
                                    <th>Intel Core i3-1005G1 1.2GHz up to 3.4GHz 4MB</th>
                                </tr>
                                <tr>
                                    <th>RAM</th>
                                    <th>4GB DDR4 2400MHz Onboard ( 1x onboard 4GB + 1x SO-DIMM socket, up to 12GB SDRAM)
                                    </th>
                                </tr>
                                <tr>
                                    <th>Ổ cứng</th>
                                    <th>256GB SSD M.2 PCIE, 1x slot SATA3 2.5"</th>
                                </tr>
                                <tr>
                                    <th>Card đồ họa</th>
                                    <th>Intel UHD Graphics</th>
                                </tr>
                                <tr>
                                    <th>Màn hình</th>
                                    <th>15.6" FHD (1920 x 1080) Acer ComfyView LCD, Anti-Glare</th>
                                </tr>
                                <tr>
                                    <th>Cổng giao tiếp</th>
                                    <th> 1x USB 3.1, 2x USB 2.0, HDMI, RJ-45</th>
                                </tr>
                                <tr>
                                    <th>Ổ quang</th>
                                    <th>None</th>
                                </tr>
                                <tr>
                                    <th>Audio</th>
                                    <th>Realtek High Definition</th>
                                </tr>
                                <tr>
                                    <th>Đọc thẻ nhớ</th>
                                    <th>None</th>
                                </tr>
                                <tr>
                                    <th>Chuẩn LAN</th>
                                    <th>10/100/1000 Mbps</th>
                                </tr>
                                <tr>
                                    <th>Chuẩn WIFI</th>
                                    <th>802.11 ac</th>
                                </tr>
                                <tr>
                                    <th>Bluetooth</th>
                                    <th>v4.2</th>
                                </tr>
                                <tr>
                                    <th>Webcam</th>
                                    <th>HD Webcam</th>
                                </tr>
                                <tr>
                                    <th>Hệ điều hành</th>
                                    <th>Windows 10 Home</th>
                                </tr>
                                <tr>
                                    <th>Pin</th>
                                    <th>3 Cell 36.7 Whr</th>
                                </tr>
                                <tr>
                                    <th>Trọng lượng</th>
                                    <th>1.7 kg</th>
                                </tr>
                                <tr>
                                    <th>Màu sắc</th>
                                    <th>Shale Black</th>
                                </tr>
                                <tr>
                                    <th>Kích thước</th>
                                    <th>363 x 247.5 x 19.9 (mm)</th>
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
              Đơn vị cung cấp laptop hàng đầu Việt Nam bảo hành chính hãng. Mua online nhận ngay nhiều ưu đãi hấp dẫn.
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
    <script src="js/changeimg.js"></script>
    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->
</body>

</html>