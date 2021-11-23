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
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Timups</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!--owl slider stylesheet -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />

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
              <span> Timups </span>
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
                <li class="nav-item active">
                  <a class="nav-link" href="about.php">
                    Giới thiệu <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Liện hệ</a>
                </li>
              </ul>
              <div class="user_option-box">
                <?php 
                    if (isset($_SESSION["username"])) { 
                      echo $_SESSION["username"]; 
                      echo  '<a href="">
                              <i class="fa fa-sign-out"></i>
                            </a>';
                    }
                    
                    else
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
                <h2>Công ty LLNT</h2>
              </div>
              <p>
              Dù chỉ mới được thành lập nhưng chúng tôi luôn đi đầu trong lĩnh vực cung cấp laptop cho người tiêu dùng nói chung và sinh viên nói riêng. Luôn là “Đối tác vàng” của các hãng máy tính Asus, Acer, Dell, HP, … Chúng tôi luôn mang đến khách hàng những sản phẩm chất lượng, giá cả cạnh tranh và dịch vụ ưu việt.
              </p>
            </div>
            
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row" style="padding-top: 50px;">
          <div class="col-md-6 col-lg-6">
            <div class="detail-box">
                <div class="heading_container">
                  <h2>Lợi thế cạnh tranh</h2>
                </div>
                <p>
                - Là đối tác vàng của các hãng máy tính Acer, Asus, Dell, HP, …, cam kết sản phẩm chính hãng, giá cả phù hợp với sinh viên và dịch vụ ưu việt. Các hãng luôn có chính sách bảo hành tận nơi hoặc giao nhận tận nơi trên toàn quốc.
                </p>
                <p>- Trung tâm bảo hành cam kết uy tín và trình độ chuyên môn cao.</p>
                <p>- Showroom trưng bày rộng rãi.</p>
                <p>- Khả năng cung cấp số lượng máy lớn với cấu hình chuyên biệt.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>Thị trường mục tiêu</h2>
              </div>
              <p>
              - Phát triển hệ thống đại lý kinh doanh máy tính toàn quốc.
              </p>
              <p>- Phát triển khách hàng khu công nghiệp, doanh nghiệp toàn quốc.</p>
              <p>- Cá nhân cần những máy tính chuyên biệt theo yêu cầu: mỏng nhẹ, cao cấp, cấu hình mạnh.</p>

            </div>
            
          </div>
        </div>
      </div>
    </section>

    <!-- end about section -->

    <!-- footer section -->
    <footer class="footer_section" >
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
    <!-- popper js -->
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
    <!-- End Google Map -->
  </body>
</html>
