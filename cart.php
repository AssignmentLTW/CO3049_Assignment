<?php

session_start();

require_once ("php/CreateDb.php");
require_once ("php/component.php");

$db = new CreateDb("Productdb", "Producttb");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}


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

<div class="row px-5 py-5">
        <div class="col-lg-6 col-xl-6 col-md-12">
            <div class="shopping-cart">
                <h4>Giỏ hàng của tôi</h4>
                <hr>

                <?php

                $total = 0;
                    if (isset($_SESSION['cart'])&& !empty($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id'], $row['detail']);
                                    $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                    }else{
                        echo "<h5>Giỏ hàng trống</h5>";
                    }

                ?>

            </div>
        </div>
        <div class="col-lg-4 col-xl-4 col-md-10 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-4">
                <h6>CHI TIẾT ĐƠN HÀNG</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php
                            if (isset($_SESSION['cart'])&& !empty($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Giá ($count sản phẩm)</h6>";
                            }else{
                                echo "<h6>Giá (0 sản phẩm)</h6>";
                            }
                        ?>
                        <h6>Phí vận chuyển</h6>
                        <hr>
                        <h6>Thành tiền</h6>
                    </div>
                    <div class="col-md-6">
                        <h6><?php echo $total; ?> ₫</h6>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        <h6><?php
                            echo $total;
                            $_SESSION['total'] = $total;
                            ?> ₫</h6>
                    </div>
                </div>
            </div>
            <a href="buy/checkout.php"><button type="button" class="btn btn-primary" style="margin: 10px 0px 10px 180px; ">Thanh toán</button></a>                
        </div>
    </div>

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