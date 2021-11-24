<form action="2.php" method="GET">
<button name="bt" value="1">số 1</button>
<button name="bt" value="2">số 2</button>
<button name="var">var</button>
</form>
<?php
$server_username = "root";
$server_password = "";
$server_host = "localhost";
$database = 'product';
session_start();
$conn = mysqli_connect($server_host, $server_username, $server_password, $database) or die("không thể kết nối tới database");
foreach ($_SESSION['cart'] as $key => $value) {
    $query = "SELECT * FROM laptop WHERE id ='" . $value . "' LIMIT 1";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $name= $row['name'];
    $price= $row['price'];   
}
?>