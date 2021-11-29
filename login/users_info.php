<?php
  session_start();
  if (!isset($_SESSION["username"]))
    header("Location: Login.php");
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
<?php

  require_once("connection.php");
  $query = "SELECT * FROM users WHERE username ='" . $_SESSION['username'] . "' LIMIT 1";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $fullName = $_POST["fullName"];
      $phone = $_POST["phone"];
      $email = $_POST["email"];
      $district = $_POST["district"];
      $city = $_POST["city"];
      $town = $_POST["town"];
      $street = $_POST["street"];
      $link="";
      $allowedExts = array("jpg", "jpeg", "gif", "png");
      $nameParts = explode(".", $_FILES["file"]["name"]);
      $extension = end($nameParts);
      if ((($_FILES["file"]["type"] == "image/gif")
          || ($_FILES["file"]["type"] == "image/jpeg")
          || ($_FILES["file"]["type"] == "image/png")
          || ($_FILES["file"]["type"] == "image/pjpeg"))
          && ($_FILES["file"]["size"] < 2000000)
          && in_array($extension, $allowedExts)) {
        
            move_uploaded_file($_FILES["file"]["tmp_name"],
            "avatar/" . $_FILES["file"]["name"]);
          $link = "avatar/" .$_FILES["file"]["name"];
      }
      if ($link=='') $link = $row['avatar'];
      if (is_numeric($phone)) {
        $sql = "UPDATE users SET fullName='$fullName', avatar='$link', phone='$phone', email='$email',street='$street', city='$city' ,town='$town',district='$district' WHERE username ='" . $_SESSION['username'] . "' LIMIT 1";
        $update = mysqli_query($conn, $sql);
      }
      
  }
  $query = "SELECT * FROM users WHERE username ='" . $_SESSION['username'] . "' LIMIT 1";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
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
                  echo '<div class="drop_down">';
                      echo '<span style="text-transform: none;">';
                      echo $_SESSION["username"];
                      echo'</span>';

                      echo '<div class="dd_content">';
                        echo '<a href="users_info.php">Tài khoản của tôi</a>';
                        echo '<a href="change_pw.php">Đổi mật khẩu</a>';
                      echo '</div>';
                    echo '</div>';
                  echo  '<a href="logout.php">
                    <i class="fa fa-sign-out"></i>
                  </a>';
                } else
                  echo '<a href="login.php">
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

    <!-- info section -->

    <section class="about_section layout_padding">
    <div class="container">
        <form method="POST" enctype="multipart/form-data">
          <div class="row gutters">
              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="card h-100">
                      <div class="card-body">
                          <div class="account-settings">
                              <div class="user-profile">
                                  <div class="user-avatar">
                                    <div class="">
                                        <img src="<?php 
                                                    if ($row['avatar'] == "") 
                                                      echo "https://bootdey.com/img/Content/avatar/avatar7.png";
                                                    else  echo $row['avatar'];
                                                  ?>  " alt="" id="photo">
                                        <input type="file" name="file" id="file"  />
                                        <div><label for="file" id="uploadBtn" class="btn btn-primary">Chọn ảnh</label></div>
                                    </div>
                                  </div>
                                  <h5 class="user-name" style="color: black"><?php echo $_SESSION['username']; ?></h5>
                                  <h6 class="user-email" style="color: black"><?php echo $row['email']; ?></h6>
                              </div>
                              
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                  <div class="card h-100">
                      
                          <div class="card-body">
                              <div class="row gutters">
                                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                      <h6 class="mb-2 text-primary">Thông tin cá nhân</h6>
                                  </div>
                                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                      <div class="form-group">
                                          <label for="fullName">Họ tên</label>
                                          <input type="text" class="form-control" id="fullName" name="fullName" value="<?php echo $row['fullName']; ?>" placeholder=" Nhập họ tên">
                                      </div>
                                  </div>
                                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                      <div class="form-group">
                                          <label for="eMail">Email</label>
                                          <input type="email" class="form-control" id="eMail" name="email" value="<?php echo $row['email']; ?>" placeholder=" Nhập địa chỉ email">
                                      </div>
                                  </div>
                                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                      <div class="form-group">
                                          <label for="phone">Số điện thoại</label>
                                          <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $row['phone']; ?>" placeholder=" Nhập số điện thoại">
                                      </div>
                                  </div>
  
                              </div>
                              <div class="row gutters">
                                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                      <h6 class="mt-3 mb-2 text-primary">Địa chỉ</h6>
                                  </div>
                                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                      <div class="form-group">
                                          <label for="Town">Địa chỉ nhà</label>
                                          <input type="name" class="form-control" name="street" value="<?php echo $row['street']; ?>" id=" Street" placeholder="Nhập địa chỉ nhà">
                                      </div>
                                  </div>
                                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                      <div class="form-group">
                                          <label for="Town">Phường/Xã</label>
                                          <input type="name" class="form-control" name="town" value="<?php echo $row['town']; ?>" id=" Town" placeholder="Nhập phường/xã">
                                      </div>
                                  </div>
                                  
                                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                      <div class="form-group">
                                          <label for="District">Quận/Huyện</label>
                                          <input type="name" class="form-control" name="district" value="<?php echo $row['district']; ?>" id="District" placeholder=" Nhập quận/huyện">
                                      </div>
                                  </div>
                                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                      <div class="form-group">
                                          <label for="ciTy">Tỉnh/Thành phố</label>
                                          <input type="name" class="form-control" name="city" value="<?php echo $row['city']; ?>" id=" ciTy " placeholder="Nhập tỉnh/thành phố">
                                      </div>
                                  </div>
  
                              </div>
                              <div class="row gutters">
                                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                      <div class="text-right">
                                          <button type="reset" id="submit" name="cancle" class="btn btn-secondary">Cancel</button>
                                          <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                  </div>
              </div>
          </div>
        </form>
    </div>
    </section>

    <!-- end about section -->

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
