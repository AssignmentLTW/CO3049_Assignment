<?php
  session_start();
  if (!isset($_SESSION["username"]))
    header("Location: ../login/login.php");
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
 
    <link rel="stylesheet" href="user.css" />

    <!-- font awesome style -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="../css/responsive.css" rel="stylesheet" />
  </head>
<!-- Custom styles for this template -->
<?php
if (isset($_SESSION['username'])) {
  $server_username = "root";
  $server_password = "";
  $server_host = "localhost";
  $database = 'member';

  $conn = mysqli_connect($server_host, $server_username, $server_password, $database) or die("không thể kết nối tới database");
  mysqli_query($conn, "SET NAMES 'UTF8'");
  $query = "SELECT * FROM users WHERE username ='" . $_SESSION['username'] . "' LIMIT 1";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
}
if (isset($_POST['buy'])) {
  if (is_numeric($_POST['phone'])&&filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo'<script>alert("Đặt hàng thành công");</script>';
    echo "<script>window.location = '../index.php'</script>";
    unset ($_SESSION['cart']);
  }
}

?>
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
                        echo '<a href="../admin/table_user.php">Thành viên</a>';
                        echo '<a href="../admin/table_product.php">Xem sản phẩm</a>';
                        echo '<a href="../admin/edit_add.php">Thêm, sửa sản phẩm</a>';
                        echo '<a href="../admin/comment.php">Xem bình luận</a>';
                      echo '</div>';
                    echo '</div>';
                    
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


<div class="row">
  
  <div class="col-md-8 order-md-1">
    <h4 class="mb-3" style="color:#007bff;">Thông tin thanh toán</h4>
    <form class="needs-validation" novalidate="" method="POST" action="">

      <div class="mb-3">
        <label for="lastName">Họ tên</label>
        <input type="text" class="form-control" id="lastName" placeholder="" value="<?php if (isset($row)) echo $row['fullName']; ?>" required="">
        <div class="invalid-feedback">
          Tên không được để trống.
        </div>
      </div>



      <div class="mb-3">
        <label for="email">Email <span class="text-muted"></span></label>
        <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="<?php if (isset($row)) echo $row['email']; ?>">
        <div class="invalid-feedback">
          Email không đúng định dạng.
        </div>
      </div>

      <div class="mb-3">
        <label for="address">Số điện thoại</label>
        <input type="text" class="form-control" id="address" name="phone" placeholder="0123456789" required="" value="<?php if (isset($row)) echo $row['phone']; ?>">
          <div class=" invalid-feedback">
        Nhập số điện thoại
      </div>
  </div>

  <div class="mb-3">
    <label for="address2">Địa chỉ nhà <span class="text-muted"></span></label>
    <input type="text" class="form-control" id="address2" placeholder="" value="<?php if (isset($row)) echo $row['street']; ?>">
  </div>

  <div class="row">
    <div class="col-md-4 mb-3">
      <label for="zip">Phường/Xã</label>
      <input type="text" class="form-control" id="zip" placeholder="" required="" value="<?php if (isset($row)) echo $row['town']; ?>">
      <div class="invalid-feedback">
        Thiếu phường.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="zip">Quận/Huyện</label>
      <input type="text" class="form-control" id="zip" placeholder="" required="" value="<?php if (isset($row)) echo $row['district']; ?>">
      <div class="invalid-feedback">
        Thiếu thành phố.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="zip">Tỉnh/Thành phố</label>
      <input type="text" class="form-control" id="zip" placeholder="" required="" value="<?php if (isset($row)) echo $row['city']; ?>">
      <div class="invalid-feedback">
        Thiếu tỉnh.
      </div>
    </div>
  </div>
  <hr class="mb-4">


  <h4 class="mb-3" style="color: #007bff;">Phương thức thanh toán</h4>

  <div class="d-block my-3">
    <div class="custom-control custom-radio">
      <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
      <label class="custom-control-label" for="credit">Giao tiền khi nhận hàng</label>
    </div>
    <div class="custom-control custom-radio">
      <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
      <label class="custom-control-label" for="debit">Chuyển khoản</label>
    </div>

  </div>
  <hr class="mb-4">
  <h4 class="mb-3" style="color: #007bff;">Tổng số tiền phải thanh toán</h4>
  <div class="d-block my-3">
    <?php
        echo $_SESSION['total'];
    ?> ₫</h6>
  </div>
  <hr class="mb-4">
  <button class="btn btn-primary btn-lg btn-block" id="b3" name="buy" type="submit">Đặt hàng</button>
  </form>
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
    <script src="script.js"></script>
           
    <!-- jQery -->
    <script src="../js/jquery-3.4.1.min.js"></script>

    <!-- bootstrap js -->
    <script src="../js/bootstrap.js"></script>
 
    <!-- custom js -->
    <script src="../js/script.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
    <!-- End Google Map -->

</body>

</html>