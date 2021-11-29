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
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

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

  <body>
    <div class="hero_area">
      <div class="hero_social">
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
      <!-- header section strats -->
      <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.php">
              <img src="images/logo_teamups.jpg" alt="" style="width:40px; ">
              <span> Teamups </span>
            </a>

            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php" 
                    >Trang chủ <span class="sr-only">(current)</span></a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="laptop.php"> Laptops </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> Giới thiệu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Liên hệ</a>
                </li>
              </ul>
              <div class="user_option-box">
                <?php
                if (isset($_SESSION["username"])) {
                   
                  if ($_SESSION["admin"] =='Y') {
                    echo '<span style="text-transform: uppercase;">';
                    echo $_SESSION["username"];
                    echo'</span>';
                    echo '<div class="drop_down" style=" min-width:50px; margin-left: 20px;">';
                      echo '<span style="text-transform: none;">';
                      echo '<i class="fa fa-cogs"></i>';
                      echo'</span>';

                      echo '<div class="dd_content">';
                        echo '<a href="admin/table_user.php">Thành viên</a>';
                        echo '<a href="admin/table_product.php">Xem sản phẩm</a>';
                        echo '<a href="admin/edit_add.php">Thêm, sửa sản phẩm</a>';
                        echo '<a href="admin/comment.php">Xem bình luận</a>';
                      echo '</div>';
                    echo '</div>';
                    
                  }
                  else {
                    echo '<div class="drop_down">';
                      echo '<span style="text-transform: none;">';
                      echo $_SESSION["username"];
                      echo'</span>';

                      echo '<div class="dd_content">';
                        echo '<a href="login/users_info.php">Tài khoản của tôi</a>';
                        echo '<a href="login/change_pw.php">Đổi mật khẩu</a>';
                      echo '</div>';
                    echo '</div>';
                  }
                  echo  '<a href="./login/logout.php">
                              <i class="fa fa-sign-out"></i>
                            </a>';
                } else
                  echo '<a href="./login/login.php">
                        <i class="fa fa-user" aria-hidden="true"></i>
                      </a>' ;
                ?>
               
                
               <a href="cart.php" class="nav-item nav-link active">
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
                <div class="search">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <div class="search-box">
                                    <form action="search.php" method="POST">
                                        <input type="text" name="search" placeholder="Search By Name" value="" />
                                        <button class="btn btn-primary">Search</button>
                                    </form>
                                </div>
                            </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- end header section -->
      <!-- slider section -->
      <section class="slider_section">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>Laptop Asus</h1>
                      <p>
                      Được thành lập năm 1989, ASUS là công ty điện tử tiêu dùng và phần cứng máy tính đa quốc gia có trụ sở tại Đài Loan. Luôn cam kết tạo nên những sản phẩm thông minh cho cuộc sống hiện tại và tương lai, ASUS là thương hiệu gaming và bo mạch chủ Số 1 thế giới, đồng thời thuộc top 3 nhà cung cấp máy tính xách tay tiêu dùng hàng đầu.
                      </p>
                      <div class="btn-box">
                        <a href="contact.php" class="btn1"> Liên hệ </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="images/asus-logo.svg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>Laptop Dell</h1>
                      <p>
                      Được thành lập vào năm 1984, công ty đa quốc gia của Hoa Kỳ - Dell Inc, ngày càng phát triển với phạm vi hoạt động trên toàn cầu hiện nay. Dell Inc là một công ty phát triển và thương mại hóa công nghệ máy tính có trụ sở tại Round Rock, Texas (Hoa Kỳ).
                      </p>
                      <div class="btn-box">
                      <a href="contact.php" class="btn1"> Liên hệ </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="images/dell-computer.svg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>Laptop Acer</h1>
                      <p>
                      Thành lập vào năm 1976, Acer là một trong những công ty hàng đầu trên thế giới về ngành Công nghệ thông tin & Truyền thông và có mặt tại hơn 160 quốc gia, trong đó có Việt Nam.
                      </p>
                      <div class="btn-box">
                      <a href="contact.php" class="btn1"> Liên hệ </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="images/logo-acer-1.svg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>Laptop Msi</h1>
                      <p>
                      Thành lập từ năm 1986, đến nay MSI có mặt trên hơn 120 quốc gia trên toàn châu lục, nổi danh với những sản phẩm phần cứng bao gồm: bo mạch chủ, card màn hình, laptop chơi game, máy chủ,...
                      </p>
                      <div class="btn-box">
                      <a href="contact.php" class="btn1"> Liên hệ </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="images/msi-3.svg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <ol class="carousel-indicators">
            <li
              data-target="#customCarousel1"
              data-slide-to="0"
              class="active"
            ></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
            <li data-target="#customCarousel1" data-slide-to="3"></li>
          </ol>
        </div>
      </section>
      <!-- end slider section -->
    </div>

    <!-- shop section -->

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
                        <a href="details/details03.php">
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
                        <a href="details/details05.php">
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
                        <a href="details/details04.php">
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
            <div class="btn-box">
          <a href="./laptop.php"> Xem thêm </a>
            </div>      
        </div>
    </section>

    <!-- end shop section -->

    <!-- about section -->

    <section class="about_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <div class="img-box">
              <img src="images/about.png" alt="" />
            </div>
          </div>
          <div class="col-md-6 col-lg-7">
            <div class="detail-box">
              <div class="heading_container">
                <h2>Giới thiệu về chúng tôi</h2>
              </div>
              <p>
              Đơn vị cung cấp laptop hàng đầu Việt Nam bảo hành chính hãng. Mua online nhận ngay nhiều ưu đãi hấp dẫn.
              </p>
              <a href="about.php"> Xem thêm </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end about section -->

    <!-- feature section -->

    <section class="feature_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>Chất lượng sản phẩm tốt nhất</h2>
          <p>
            Tất cả sản phẩm của công ty chúng tôi được đảm bảo chất lượng cao và được tích hợp những công nghệ mới nhất.
          </p>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <div class="box">
                  
              <div class="detail-box">
                <h5>CPU</h5>
                <p>Các mẫu laptop được trang bị bộ xử lý Intel và AMD thế hệ mới nhất.</p>
                
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="box">
              
              <div class="detail-box">
                <h5>RAM</h5>
                <p>Dung lượng RAM từ 4 GB trở lên giúp đáp ứng nhiều nhu cầu sử dụng</p>
              
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="box">
              
              <div class="detail-box">
                <h5>Ổ cứng</h5>
                <p>Laptop được trang bị ổ cứng SSD với dung lượng lớn đảm bảo nhu cầu lưu trữ.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="box">
          
              <div class="detail-box">
                <h5>Kết nối</h5>
                <p>Tích hợp Wifi 6 và Bluetooth 5.0 cùng các cổng kết nối thông dụng.</p>
                
              </div>
            </div>
          </div>
        </div>
        <div class="btn-box">
          <a href="laptop.php"> Xem thêm </a>
        </div>
      </div>
    </section>

    <!-- end feature section -->

    
    

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

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="js/script.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
    <!-- End Google Map -->
  </body>
</html>
