<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <title>Sign Up</title>
  <link rel="stylesheet" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <?php
  require_once("connection.php");
  if (isset($_POST["btn_signup"])) {
    $username = $_POST["username"];
    $password = $_POST["pass"];
    $email = $_POST["email"];

    if ($username == "" || $password == "" || $email == "") {
      echo '<p>Please enter full information!</p>';
    } else {
      $sql = "select * from users where username='$username'";
      $kt = mysqli_query($conn, $sql);
      if (mysqli_num_rows($kt)  > 0) {
        echo "<p>Account already exists!</p>";
      } else {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "<p>Invalid email format</p>";
        } else {
          //thực hiện việc lưu trữ dữ liệu vào db
          $sql = "INSERT INTO users(
	    					username,
	    					password,
						    email
	    					) VALUES (
	    					'$username',
	    					'$password',
	    					'$email'
	    					)";
          // thực thi câu $sql với biến conn lấy từ file connection.php
          mysqli_query($conn, $sql);
          echo "<p>Signing Up successfully!</p>";
        }
      }
    }
  }
  ?>

  <div class="wrapper">
    <div class="title-text">
      <div class="title signup">Sign Up</div>
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


        <form class="signup" method="POST">
          <div class="field">
            <input type="text" placeholder="Username" name="username" />
          </div>
          <div class="field">
            <input type="password" placeholder="Password" name="pass" />
          </div>
          <div class="field">
            <input type="text" placeholder="Email Address" name="email" />
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Signup" name="btn_signup" />
          </div>
          <div class="login-link">
            Have an account? <a href="./login.php">Login now</a>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>

</html>