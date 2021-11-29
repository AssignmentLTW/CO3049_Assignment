<?php
    session_start();
    if ($_SESSION["admin"] != 'Y')
      header("Location: ../index.php");
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
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <!--owl slider stylesheet -->

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
                  <a class="nav-link" href="../index.php">Trang chủ </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../laptop.php"> Laptops </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../about.php">
                    Giới thiệu 
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
                                    echo '<div class="drop_down" style=" min-width:50px; margin-left: 20px;">';
                                      echo '<span style="text-transform: none;">';
                                      echo '<i class="fa fa-cogs"></i>';
                                      echo'</span>';
                
                                      echo '<div class="dd_content">';
                                        echo '<a href="table_user.php">Thành viên</a>';
                                        echo '<a href="table_product.php">Xem sản phẩm</a>';
                                        echo '<a href="edit_add.php">Thêm, sửa sản phẩm</a>';
                                        echo '<a href="comment.php">Xem bình luận</a>';
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
                            <div class="search">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <div class="search-box">
                                    <form action="../search.php" method="POST">
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
    </div>

    <section class="layout_padding">
      <div class="container">
        <h2 style="text-align: center; padding-bottom: 20px; font-weight:bold">
        Danh sách thành viên</h2>  
        <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id="table">
                <?php
                  include 'display.php';
                ?>
              </div>
          </div>
      </div>
      
    </section>

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
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(function() {
            $("#form").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: 'display.php',
                    data: $('#form').serialize(),
                    success: function() {}
                });
            });
        });
        setInterval(function() {
            $.ajax({
                url: "display.php",
                success: function(r) {
                    $("#table").html(r);
                }
            });
        }, 1000);
    </script>
    
    <!-- bootstrap js -->
    <script src="../js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="../js/script.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
    <!-- End Google Map -->
  </body>
</html>
