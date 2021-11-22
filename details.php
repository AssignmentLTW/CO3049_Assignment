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

    <title>Timups</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="index.html">
                        <span> Timups </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="watches.php"> Watches </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php"> About </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="contact.php">Contact Us <span class="sr-only">(current)</span>
                                </a>
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
    <section class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p><a href="#">Watches</a> &gt; <a href="#">Details</a> &gt; <a href="#">Laptop Acer</a></p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="box-large">
                        <div class="box-top">
                            <img id="big_img" class="img-fluid" src="images/sp01-detail01.jpg" alt="Product">
                        </div>
                        <div class="box-bottom">
                            <div>
                                <a href="#" onclick="changeImage(1)"><img src="images/sp01-detail01.jpg"
                                        alt="Product"></a>
                            </div>
                            <div>
                                <a href="#" onclick="changeImage(2)"><img src="images/sp01-detail02.jpg"
                                        alt="Product"></a>
                            </div>
                            <div>
                                <a href="#" onclick="changeImage(3)"><img src="images/sp01-detail03.jpg"
                                        alt="Product"></a>
                            </div>
                            <div>
                                <a href="#" onclick="changeImage(4)"><img src="images/sp01-detail04.jpg"
                                        alt="Product"></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 summary">
                            <h2>Laptop Acer Aspire 3 A315 56 37DVLaptop Acer</h2>
                            <p>Nhà sản xuất : ACER</p><br>

                            <p> Xuất xứ : Chính hãng</p><br>

                            <p> Bảo hành : 12 Tháng</p><br>

                            <p> Tình trạng : Mới 100%</p><br>
                            <h3>Price: 11,990,000₫ </h3>
                            <button class="btn btn-outline-primary btn-block" type="button">Thêm vào giỏ hàng</button>
                            <button class="btn btn-success btn-block" type="button">Mua ngay</button>
                        </div>
                        <div class="col-12" style="margin-top: 25px;">
                            <h3>Mô tả</h3>
                            <ul>
                                <li>RAM: </li>
                                <li>CPU: </li>
                                <li>Ổ cứng: </li>
                                <li>Card đồ họa: </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end details section -->

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 footer-col">
                    <div class="footer_detail">
                        <h4>About</h4>
                        <p>
                            Necessary, making this the first true generator on the Internet. It uses a dictionary of
                            over 200 Latin words, combined with
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
                <div class="col-md-6 col-lg-3 footer-col">
                    <div class="footer_contact">
                        <h4>Reach at..</h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span> Location </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span> Call +01 1234567890 </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span> demo@gmail.com </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 footer-col">
                    <div class="footer_contact">
                        <h4>Subscribe</h4>
                        <form action="#">
                            <input type="text" placeholder="Enter email" />
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 footer-col">
                    <div class="map_container">
                        <div class="map">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-info">
                <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By
                    <a href="https://html.design/">Free Html Templates</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- footer section -->

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