<!DOCTYPE html>
<!-- saved from url=(0052)https://getbootstrap.com/docs/4.0/examples/checkout/ -->
<html lang="en">


  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">
  <!-- Bootstrap core CSS -->
  <link href="./Checkout example for Bootstrap_files/bootstrap.min.css" rel="stylesheet">
1
<!-- Custom styles for this template -->
<?php
session_start();
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
    echo'<script>Swal.fire("Mua thành công", "", "");</script>';
  }
}
?>

<body class="bg-light">

  <div class="container">


    <div class="row">
      
      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" novalidate="" method="POST" action="">

          <div class="mb-3">
            <label for="lastName">Họ tên</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="<?php if (isset($row)) echo $row['fullName']; ?>" required="">
            <div class="invalid-feedback">
              Tên không được để trống.
            </div>
          </div>



          <div class="mb-3">
            <label for="email">Email <span class="text-muted">(Optional)</span></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="<?php if (isset($row)) echo $row['email']; ?>">
            <div class="invalid-feedback">
              Email không đúng định dạng.
            </div>
          </div>

          <div class="mb-3">
            <label for="address">Số điện thoại</label>
            <input type="text" class="form-control" id="address" name="phone" placeholder="0123456789" required="" value="<?php if (isset($row)) echo $row['phone']; ?>"">
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
          <label for="zip">Phường</label>
          <input type="text" class="form-control" id="zip" placeholder="" required="" value="<?php if (isset($row)) echo $row['state']; ?>">
          <div class="invalid-feedback">
            Thiếu phường.
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="zip">Thành phố</label>
          <input type="text" class="form-control" id="zip" placeholder="" required="" value="<?php if (isset($row)) echo $row['city']; ?>">
          <div class="invalid-feedback">
            Thiếu thành phố.
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="zip">Tỉnh</label>
          <input type="text" class="form-control" id="zip" placeholder="" required="">
          <div class="invalid-feedback">
            Thiếu tỉnh.
          </div>
        </div>
      </div>
      <hr class="mb-4">


      <h4 class="mb-3">Payment</h4>

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
      <button class="btn btn-primary btn-lg btn-block" id="b3" name="buy" type="submit">Đặt hàng</button>
      </form>
    </div>
  </div>


  </div>






</body>
<div style="position: absolute; top: 0px;"></div>

</html>