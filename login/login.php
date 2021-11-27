<?php
  session_start();
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Log In</title>
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <?php
      require_once("connection.php");
      if (isset($_POST["btn_login"])) {
        
        $username = $_POST["username"];
        $password = $_POST["password"];
        //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
        //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
        $username = strip_tags($username);
        $username = addslashes($username);
        $password = strip_tags($password);
        $password = addslashes($password);
        if ($username == "" || $password =="") {
          echo "<p>Please enter full information!</p>";
        }
            else{
          $sql = "select * from users where username = '$username' and password = '$password' ";
          $query = mysqli_query($conn,$sql);
          $num_rows = mysqli_num_rows($query);
          if ($num_rows==0) {
            echo "<p>Username or Password is incorrect!</p>";
          }else{
            //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
            $_SESSION['username'] = $username;
            $query = "SELECT * FROM users WHERE username ='" . $_SESSION['username'] . "' LIMIT 1";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result);
            $_SESSION['admin'] = $row['admin'];
            
                    // Thực thi hành động sau khi lưu thông tin vào session
                    // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                    header('Location: ../index.php');
          }
        }
      }
    ?>

    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Log In</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked />
          <input type="radio" name="slide" id="signup" />
          <label for="login" class="slide login"></label>
          <label for="signup" class="slide signup"></label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form class="login" method="POST" action="login.php">
            <div class="field">
              <input type="text" placeholder="Username" name="username"/>
            </div>
            <div class="field">
              <input type="password" placeholder="Password" name="password" />
            </div>
            <div class="pass-link">
              <a href="#">Forgot password?</a>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login" name="btn_login" />
            </div>
            <div class="signup-link">
              Not a member? <a href="./register.php">Signup now</a>
            </div>
          </form>
        </div>
      </div>
    </div>
   
  </body>
</html>
