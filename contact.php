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
  <body class="sub_page">
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.php">
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
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Trang chủ </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="laptop.php"> Laptops </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> Giới thiệu </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="contact.php"
                    >Liên hệ <span class="sr-only">(current)</span>
                  </a>
                </li>
              </ul>
              <div class="user_option-box">
                <?php
                    if (isset($_SESSION["username"])) {
                      echo '<a href="./login/users_info.php" style="text-transform: none;">';
                      echo $_SESSION["username"];
                      echo'</a>';
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

    <!-- contact section -->

    <section class="contact_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="form_container">
              <div class="heading_container">
                <h2>Liên hệ với chúng tôi</h2>
              </div>
              <form action="">
                <div>
                  <input type="text" placeholder="Họ tên " />
                </div>
                <div>
                  <input type="email" placeholder="Email" />
                </div>
                <div>
                  <input type="text" placeholder="Số điện thoại" />
                </div>
                <div>
                  <input
                    type="text"
                    class="message-box"
                    placeholder="Bình luận"
                  />
                </div>
                <div class="d-flex" style="padding-bottom: 30px">
                  <button>GỬI</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-box">
              <img src="images/contact.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end contact section -->

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
