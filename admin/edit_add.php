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
    <?php

        $db = mysqli_connect('localhost','root','','productdb');
        $product = mysqli_query($db, "SELECT * FROM producttb");
        if (isset($_POST["btn-add"])) {
            if (isset($_POST["id"])) $id = $_POST["id"];
            if (isset($_POST["name"])) $name = $_POST["name"];
            if (isset($_POST["price"])) $price = $_POST["price"];
            
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
                    "../images/" . $_FILES["file"]["name"]);
                    $link = "./images/" .$_FILES["file"]["name"];
                }
            
            $sql = "INSERT INTO producttb(
                    id,
                    product_name,
                    product_price,
                    product_image
                    ) VALUES (
                    '$id',
                    '$name',
                    '$price',
                    '$link'
                    )";  
            mysqli_query($db, $sql);
        }

        if (isset($_POST["btn-update"])) {
            if (isset($_POST["newId"])) 
            {   $id = $_POST["newId"] ;
                $new = $id - 1;
            }
            $query = "SELECT * FROM producttb WHERE id ='" . $id . "' LIMIT 1";
            $result = mysqli_query($db, $query);
            $row = mysqli_fetch_array($result);

            if ($_POST["newName"] != '') 
                $name = $_POST["newName"];
            else $name = $row['product_name'];
            if ($_POST["newPrice"] != '') 
                $price = $_POST["newPrice"];
            else $price = $row['product_price'];
            
            $link="";
            $allowedExts = array("jpg", "jpeg", "gif", "png");
            $nameParts = explode(".", $_FILES["newFile"]["name"]);
            $extension = end($nameParts);
            if ((($_FILES["newFile"]["type"] == "image/gif")
                || ($_FILES["newFile"]["type"] == "image/jpeg")
                || ($_FILES["newFile"]["type"] == "image/png")
                || ($_FILES["newFile"]["type"] == "image/pjpeg"))
                && ($_FILES["newFile"]["size"] < 2000000)
                && in_array($extension, $allowedExts)) {
                
                    move_uploaded_file($_FILES["newFile"]["tmp_name"],
                    "../images/" . $_FILES["newFile"]["name"]);
                    $link = "./images/" .$_FILES["newFile"]["name"];
                }
            if ($link == '') $link = $row['product_image'] ;
            $sql = "UPDATE producttb SET product_name = ?, product_price = ?, product_image = ? WHERE id = (SELECT id FROM producttb LIMIT ? , 1 )";
            $stmt = $db->prepare($sql);
            $stmt->bind_param("sdsi", $name, $price, $link,$new);
            $stmt->execute();
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

            <div class="row">
                <div class="col-xl-6">
                    <h2 style="padding-bottom: 20px; font-weight:bold; margin-left:-14px;" id="change">
                    Sửa thông tin sản phẩm</h2>
                    
                      <form method="POST" id="form" enctype="multipart/form-data">
                      
                        <div class="form-group">
                          <label for="">Nhập id sản phẩm</label>
                          <input type="text" class="form-control" name="newId"> 
                        </div>
                        <div class="form-group">
                          <label for="">Thêm hình sản phẩm</label>
                          <input type="file" class="form-control-file" name="newFile" id="newFile">
                    </div>
                        <div class="form-group">
                          <label for="">Nhập tên mới</label>
                          <input type="text" class="form-control" name="newName"> 
                        </div>
                        <div class="form-group">
                          <label for="">Nhập giá mới</label>
                          <input type="" class="form-control" name="newPrice">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" name="btn-update">Cập nhật</button>
                      </form>
                </div>

                <div class="col-xl-6">
                    <h2 style=" padding-bottom: 20px; font-weight:bold" id="add">
                    Thêm sản phẩm</h2>    
                    <form method="POST" id="form" enctype="multipart/form-data">
                        
                        <div class="form-group">
                        <label for="">Nhập id</label>
                        <input type="text" class="form-control" name="id"> 
                        </div>
                        <div class="form-group">
                        <label for="">Thêm hình sản phẩm</label>
                        <input type="file" class="form-control-file" name="file" id="file">
                        </div>
                        <div class="form-group">
                        <label for="">Nhập tên sản phẩm</label>
                        <input type="text" class="form-control" name="name"> 
                        </div>
                        <div class="form-group">
                        <label for="">Nhập giá sản phẩm</label>
                        <input type="" class="form-control" name="price">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" name="btn-add">Thêm</button>
                    </form>
                </div>
            </div>
            
        </div>
    </section>

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
