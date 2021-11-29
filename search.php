<?php

session_start();

require_once ('./php/CreateDb.php');
require_once ('./php/component.php');


// create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

$connection = mysqli_connect('localhost','root','','productdb');

if (isset($_POST['search'])) {
  $searchKey = $_POST['search'];
  $sql = "SELECT * FROM producttb WHERE product_name LIKE '%$searchKey%'";
}else {
  $sql = "SELECT * FROM producttb";
  $searchKey = "";
}
  $result = mysqli_query($connection,$sql);

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
        <?php require_once ("php/header.php"); ?>
        <!-- end header section -->
</div>

    <!-- Content -->
    <section class="layout_padding">
      <div class="container">
        <h2 style="text-align: center; padding-bottom: 20px; font-weight:bold">
        Kết quả tìm kiếm <?php echo '"'. $searchKey. '"'; ?></h2>  
        <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id="table">
                <table class="table">
                  <tr class="row">
                    <th class="col-3">Hình ảnh</th>
                    <th class="col">Tên Sản Phẩm</th>
                    <th class="col">Giá Sản Phẩm</th>
                  </tr>
                    <?php while($row = mysqli_fetch_object($result)) { ?>
                  <tr class="row">
                    <td class="col-3"><?php echo "<a href='". $row->detail ."'><img src='$row->product_image' alt=\"Image1\" class=\"img-fluid\"/></a>"  ?></td></a>
                    <td class="col"><?php echo $row->product_name ?></td>
                    <td class="col"><?php echo $row->product_price ?> ₫</td>
                  </tr>
                    <?php } ?>
                </table>
              </div>
          </div>
      </div>    
    </section>
    <!-- End Content -->

<!-- footer section -->
    <?php require_once ("php/footer.php"); ?>
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