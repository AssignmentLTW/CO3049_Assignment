<?php

session_start();

require_once ('php/CreateDb.php');
require_once ('./php/component.php');


// create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

if (isset($_POST['add'])){

    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Sản phẩm đã có trong giỏ hàng..!')</script>";
            echo "<script>window.location = 'laptop.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        //print_r($_SESSION['cart']);
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

    <!-- shop best seller section -->
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Bán chạy nhất</h2>
            </div>
            <div class="row">
            <?php
                $result = $database->getDatabs();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['detail']);
                }
            ?>
            </div>

        </div>
    </section>
    <!-- end shop best seller section -->


    <!-- shop gaming section -->

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Laptop Gaming</h2>
            </div>
            <div class="row">
            <?php
                $result = $database->getDatagm();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['detail']);
                }
            ?>
            </div>
            
        </div>
    </section>

    <!-- end shop gaming section -->

    <!-- shop ultrabook section -->

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Laptop Ultrabook</h2>
            </div>
            <div class="row">
            <?php
                $result = $database->getDataul();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['detail']);
                }
            ?>
            </div>
            
        </div>
    </section>
    <!-- end shop ultrabook section -->

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