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
                    >Trang ch??? <span class="sr-only">(current)</span></a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="laptop.php"> Laptops </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> Gi???i thi???u</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Li??n h???</a>
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
                      ???????c th??nh l???p n??m 1989, ASUS l?? c??ng ty ??i???n t??? ti??u d??ng v?? ph???n c???ng m??y t??nh ??a qu???c gia c?? tr??? s??? t???i ????i Loan. Lu??n cam k???t t???o n??n nh???ng s???n ph???m th??ng minh cho cu???c s???ng hi???n t???i v?? t????ng lai, ASUS l?? th????ng hi???u gaming v?? bo m???ch ch??? S??? 1 th??? gi???i, ?????ng th???i thu???c top 3 nh?? cung c???p m??y t??nh x??ch tay ti??u d??ng h??ng ?????u.
                      </p>
                      <div class="btn-box">
                        <a href="contact.php" class="btn1"> Li??n h??? </a>
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
                      ???????c th??nh l???p v??o n??m 1984, c??ng ty ??a qu???c gia c???a Hoa K??? - Dell Inc, ng??y c??ng ph??t tri???n v???i ph???m vi ho???t ?????ng tr??n to??n c???u hi???n nay. Dell Inc l?? m???t c??ng ty ph??t tri???n v?? th????ng m???i h??a c??ng ngh??? m??y t??nh c?? tr??? s??? t???i Round Rock, Texas (Hoa K???).
                      </p>
                      <div class="btn-box">
                      <a href="contact.php" class="btn1"> Li??n h??? </a>
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
                      Th??nh l???p v??o n??m 1976, Acer l?? m???t trong nh???ng c??ng ty h??ng ?????u tr??n th??? gi???i v??? ng??nh C??ng ngh??? th??ng tin & Truy???n th??ng v?? c?? m???t t???i h??n 160 qu???c gia, trong ???? c?? Vi???t Nam.
                      </p>
                      <div class="btn-box">
                      <a href="contact.php" class="btn1"> Li??n h??? </a>
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
                      Th??nh l???p t??? n??m 1986, ?????n nay MSI c?? m???t tr??n h??n 120 qu???c gia tr??n to??n ch??u l???c, n???i danh v???i nh???ng s???n ph???m ph???n c???ng bao g???m: bo m???ch ch???, card m??n h??nh, laptop ch??i game, m??y ch???,...
                      </p>
                      <div class="btn-box">
                      <a href="contact.php" class="btn1"> Li??n h??? </a>
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
                <h2>B??n ch???y nh???t</h2>
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
                                    Gi??:
                                    <span> 11,990,000??? </span>
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
                                    Gi??:
                                    <span> 17,490,000??? </span>
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
                                    Gi??:
                                    <span> 21,990,000??? </span>
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
                                    Gi??:
                                    <span> 24,990,000??? </span>
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
                                    Gi??:
                                    <span> 20,490,000??? </span>
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
                                    Gi??:
                                    <span> 18,490,000??? </span>
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
                                    Gi??:
                                    <span> 20,790,000??? </span>
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
          <a href="./laptop.php"> Xem th??m </a>
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
                <h2>Gi???i thi???u v??? ch??ng t??i</h2>
              </div>
              <p>
              ????n v??? cung c???p laptop h??ng ?????u Vi???t Nam b???o h??nh ch??nh h??ng. Mua online nh???n ngay nhi???u ??u ????i h???p d???n.
              </p>
              <a href="about.php"> Xem th??m </a>
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
          <h2>Ch???t l?????ng s???n ph???m t???t nh???t</h2>
          <p>
            T???t c??? s???n ph???m c???a c??ng ty ch??ng t??i ???????c ?????m b???o ch???t l?????ng cao v?? ???????c t??ch h???p nh???ng c??ng ngh??? m???i nh???t.
          </p>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <div class="box">
                  
              <div class="detail-box">
                <h5>CPU</h5>
                <p>C??c m???u laptop ???????c trang b??? b??? x??? l?? Intel v?? AMD th??? h??? m???i nh???t.</p>
                
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="box">
              
              <div class="detail-box">
                <h5>RAM</h5>
                <p>Dung l?????ng RAM t??? 4 GB tr??? l??n gi??p ????p ???ng nhi???u nhu c???u s??? d???ng</p>
              
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="box">
              
              <div class="detail-box">
                <h5>??? c???ng</h5>
                <p>Laptop ???????c trang b??? ??? c???ng SSD v???i dung l?????ng l???n ?????m b???o nhu c???u l??u tr???.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="box">
          
              <div class="detail-box">
                <h5>K???t n???i</h5>
                <p>T??ch h???p Wifi 6 v?? Bluetooth 5.0 c??ng c??c c???ng k???t n???i th??ng d???ng.</p>
                
              </div>
            </div>
          </div>
        </div>
        <div class="btn-box">
          <a href="laptop.php"> Xem th??m </a>
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
