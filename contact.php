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
  <?php
    $db = mysqli_connect('localhost','root','','comment');
    $cmt = mysqli_query($db, "SELECT * FROM cmt");
    if (isset($_POST["send"])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $comment = $_POST['comment'];

      $sql = "INSERT INTO cmt(
        name,
        email,
        phone,
        comment
        ) VALUES (
        '$name',
        '$email',
        '$phone',
        '$comment'
        )";  
        mysqli_query($db, $sql);
    }
  ?>

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
                  <a class="nav-link" href="index.php">Trang ch??? </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="laptop.php"> Laptops </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> Gi???i thi???u </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="contact.php"
                    >Li??n h??? <span class="sr-only">(current)</span>
                  </a>
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
                        echo '<a href="admin/table_user.php">Th??nh vi??n</a>';
                        echo '<a href="admin/table_product.php">Xem s???n ph???m</a>';
                        echo '<a href="admin/edit_add.php">Th??m, s???a s???n ph???m</a>';
                        echo '<a href="admin/comment.php">Xem b??nh lu???n</a>';
                      echo '</div>';
                    echo '</div>';
                    
                  }
                  else {
                    echo '<div class="drop_down">';
                      echo '<span style="text-transform: none;">';
                      echo $_SESSION["username"];
                      echo'</span>';

                      echo '<div class="dd_content">';
                        echo '<a href="login/users_info.php">T??i kho???n c???a t??i</a>';
                        echo '<a href="login/change_pw.php">?????i m???t kh???u</a>';
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
    </div>

    <!-- contact section -->

    <section class="contact_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="form_container">
              <div class="heading_container">
                <h2>Li??n h??? v???i ch??ng t??i</h2>
              </div>
              <form method="POST">
                <div>
                  <input type="text" placeholder="H??? t??n " name="name" />
                </div>
                <div>
                  <input type="email" placeholder="Email" name="email"/>
                </div>
                <div>
                  <input type="text" placeholder="S??? ??i???n tho???i" name="phone" />
                </div>
                <div>
                  <input
                    type="text"
                    class="message-box"
                    placeholder="B??nh lu???n"
                    name="comment"
                  />
                </div>
                <div class="d-flex" style="padding-bottom: 30px">
                  <button type="submit" name="send">G???I</button>
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
              <h4>Gi???i thi???u</h4>
              <p>
              ????n v??? cung c???p laptop h??ng ?????u Vi???t Nam b???o h??nh ch??nh h??ng. Mua online nh???n ngay nhi???u ??u ????i h???p d???n.
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
              <h4>Li??n h???</h4>
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
