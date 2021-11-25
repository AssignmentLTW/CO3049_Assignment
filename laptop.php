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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />


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
                            <li class="nav-item active">
                                <a class="nav-link" href="laptop.php">
                                    Laptops <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php"> Giới thiệu </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Liên hệ</a>
                            </li>
                        </ul>
                        <div class="user_option-box">
                        <?php
                            if (isset($_SESSION["username"])) {
                            require_once("login/connection.php");
                            $query = "SELECT * FROM users WHERE username ='" . $_SESSION['username'] . "' LIMIT 1";
                            $result = mysqli_query($conn, $query);
                            $row = mysqli_fetch_array($result);  
                            if ($row["admin"] == 'Y') {
                                echo '<span style="text-transform: uppercase;">';
                                echo $_SESSION["username"];
                                echo'</span>';
                                echo '<a href="user/table_user.php">
                                        <i class="fa fa-cogs"></i>
                                    </a>';
                                
                            }
                            else {
                                echo '<a href="./login/users_info.php" style="text-transform: none;">';
                                echo $_SESSION["username"];
                                echo'</a>';
                            }
                            echo  '<a href="./login/logout.php">
                                        <i class="fa fa-sign-out"></i>
                                        </a>';
                            } else
                            echo '<a href="./login/login.php">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </a>' ;
                        ?>
                            <a href="">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
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

    <!-- shop best seller section -->

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Bán chạy nhất</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <a href="details/details01.php">
                            <div class="img-box">
                                <img src="images/bs1.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Laptop Acer Aspire 3 A315 56 37DV</h6>
                                <h6>
                                    Giá:
                                    <span> 11,990,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> Featured </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="./details/details03.php">
                            <div class="img-box">
                                <img src="images/bs2.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Laptop Asus Vivobook A415EA EB360T</h6>
                                <h6>
                                    Giá:
                                    <span> 17,490,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> New </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="details/details02.php">
                            <div class="img-box">
                                <img src="images/bs3.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Laptop Gaming Acer Nitro 5 AN515 57 56S5</h6>
                                <h6>
                                    Giá:
                                    <span> 21,990,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> New </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="./details/details05.php">
                            <div class="img-box">
                                <img src="images/bs4.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Laptop Gaming Asus ROG Strix G15 G513IC HN002T</h6>
                                <h6>
                                    Giá:
                                    <span> 24,990,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> New </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="./details/details04.php">
                            <div class="img-box">
                                <img src="images/bs5.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Laptop ASUS TUF Gaming F15 FX506LH HN002T</h6>
                                <h6>
                                    Giá:
                                    <span> 20,490,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> New </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/bs6.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Laptop MSI Modern 15 A10MU 667VN</h6>
                                <h6>
                                    Giá:
                                    <span> 18,490,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> New </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/bs7.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Laptop Gaming MSI Bravo 15 B5DD 276VN</h6>
                                <h6>
                                    Giá:
                                    <span> 20,790,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> New </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- end shop best seller section -->

    <!-- shop gaming section -->

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Laptop Gaming</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <a href="./details/details04.php">
                            <div class="img-box">
                                <img src="images/gm1.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Laptop ASUS TUF Gaming F15 FX506LH HN002T</h6>
                                <h6>
                                    Giá:
                                    <span> 20,490,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> Featured </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/gm2.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Laptop Gaming Acer Nitro 5 AN515 45 R3SM</h6>
                                <h6>
                                    Giá:
                                    <span> 21,390,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> New </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/gm3.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Laptop Gaming MSI Bravo 15 B5DD 276VN</h6>
                                <h6>
                                    Giá:
                                    <span> 20,790,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> New </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="./details/details02.php">
                            <div class="img-box">
                                <img src="images/gm4.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Laptop Gaming Acer Nitro 5 AN515 57 56S5</h6>
                                <h6>
                                    Giá:
                                    <span> 21,990,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> New </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/gm5.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Laptop Gaming MSI Katana GF66 11UC 676VN</h6>
                                <h6>
                                    Giá:
                                    <span> 24,390,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> New </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="./details/details05.php">
                            <div class="img-box">
                                <img src="images/gm6.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Laptop Gaming Asus ROG Strix G15 G513IC HN002T</h6>
                                <h6>
                                    Giá:
                                    <span> 24,990,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> New </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/gm7.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Laptop gaming Lenovo Legion 5 15ACH6A 82NW003BVN</h6>
                                <h6>
                                    Giá:
                                    <span> 34,990,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> New </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- end shop gaming section -->

    <!-- shop ultrabook section -->

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Laptop Ultrabook</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <a href="./details/details01.php">
                            <div class="img-box">
                                <img src="images/ul1.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Laptop Acer Aspire 3 A315 56 502X</h6>
                                <h6>
                                    Giá:
                                    <span> 13,790,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> Featured </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/ul2.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Laptop MSI Modern 15 A10MU 667VN</h6>
                                <h6>
                                    Giá:
                                    <span> 18,490,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> New </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/ul3.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Laptop Asus Vivobook M513UA L1221T</h6>
                                <h6>
                                    Giá:
                                    <span> 18,790,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> New </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/ul4.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Laptop Acer Aspire 5 A514 54 540F</h6>
                                <h6>
                                    Giá:
                                    <span> 18,290,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> New </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/ul5.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Laptop MSI Modern 14 B11SBU 668VN</h6>
                                <h6>
                                    Giá:
                                    <span> 22,490,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> New </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/ul6.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Laptop HP Envy 13 BA1535TU 4U6M4PA</h6>
                                <h6>
                                    Giá:
                                    <span> 28,990,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> New </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/ul7.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Laptop Dell XPS 13 9310</h6>
                                <h6>
                                    Giá:
                                    <span> 29,990,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> New </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- end shop ultrabook section -->

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



    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>

    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>

    <!-- custom js -->
    <script src="js/script.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->
</body>

</html>