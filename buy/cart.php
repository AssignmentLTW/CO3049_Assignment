
<?php
$server_username = "root";
$server_password = "";
$server_host = "localhost";
$database = 'product';
session_start();
$conn = mysqli_connect($server_host, $server_username, $server_password, $database) or die("không thể kết nối tới database");
?>
<link rel="stylesheet" href="style.css">
<div class="px-4 px-lg-0">
    <!-- For demo purpose -->
    <div class="container text-white py-5 text-center">
      <h1 class="display-4">Bootstrap 4 shopping cart</h1>
      <p class="lead mb-0">Build a fully structred shopping cart page using Bootstrap 4. </p>
      <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-white font-italic">
              <u>Bootstrapious</u></a>
      </p>
    </div>
    <!-- End -->
  
    <div class="pb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
  
            <!-- Shopping cart table -->
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" class="border-0 bg-light">
                      <div class="p-2 px-3 text-uppercase">Product</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Price</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Quantity</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Remove</div>
                    </th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $i=0;

                foreach ($_SESSION['cart'] as $key => $value) {
                    $query = "SELECT * FROM laptop WHERE id ='" . $key . "' LIMIT 1";
                    $result = mysqli_query($conn, $query);
                    $row = mysqli_fetch_array($result);
                    $name= $row['name'];
                    $price= $row['price'];
                    $i+=$price*$value;
                    echo'<tr>
                    <th scope="row" class="border-0">
                      <div class="p-2">
                        <img src="https://bootstrapious.com/i/snippets/sn-cart/product-1.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                        <div class="ml-3 d-inline-block align-middle">
                          <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">'.$name.'</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: Watches</span>
                        </div>
                      </div>
                    </th>
                    <td class="border-0 align-middle"><strong>'.$price.'</strong></td>
                    <td class="border-0 align-middle"><strong>'.$value.'</strong></td>
                    <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                  </tr>';   
                }
                ?>
                  
                </tbody>
              </table>
            </div>
            <!-- End -->
          </div>
        </div>
  
        <div class="row py-5 p-4 bg-white rounded shadow-sm">
          <div class="col-lg-6">
            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
            <div class="p-4">
              <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
              <div class="input-group mb-4 border rounded-pill p-2">
                <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
                <div class="input-group-append border-0">
                  <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
            <div class="p-4">
              <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
              <ul class="list-unstyled mb-4">
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tổng tiền hàng </strong><strong><?php echo $i?></strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tiền vận chuyển</strong><strong>35000</strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Thuế</strong><strong>0.00</strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tổng</strong>
                  <h5 class="font-weight-bold"><?php echo $i+35000?></h5>
                </li>
              </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block" onclick="window.location.href = 'checkout.php';">Procceed to checkout</a>
            </div>
          </div>
        </div>
  
      </div>
    </div>
  </div>