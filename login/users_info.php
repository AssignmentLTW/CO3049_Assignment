<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="my.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<?php


session_start();

require_once("connection.php");

if (isset($_POST["submit"])) {
    $fullName = $_POST["fullName"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $state = $_POST["state"];
    $city = $_POST["city"];
    $street = $_POST["street"];
    if (is_numeric($phone))
    {
    $sql = "UPDATE users SET fullName='$fullName', phone='$phone', email='$email', city='$city' ,street='$street',state='$state' WHERE username ='" . $_SESSION['username'] . "' LIMIT 1";
    $update = mysqli_query($conn, $sql);}
}
$query = "SELECT * FROM users WHERE username ='" . $_SESSION['username'] . "' LIMIT 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
?>

<body>
    <div class="container">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <div class="user-avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                                </div>
                                <h5 class="user-name"><?php echo $_SESSION['username']; ?></h5>
                                <h6 class="user-email"><?php echo $row['email']; ?></h6>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <form method="POST">
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Personal Details</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Full Name</label>
                                        <input type="text" class="form-control" id="fullName" name="fullName" value="<?php echo $row['fullName']; ?>" placeholder=" Enter full name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail">Email</label>
                                        <input type="email" class="form-control" id="eMail" name="email" value="<?php echo $row['email']; ?>" placeholder=" Enter email ID">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $row['phone']; ?>" placeholder=" Enter phone number">
                                    </div>
                                </div>

                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mt-3 mb-2 text-primary">Address</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="Street">Street</label>
                                        <input type="name" class="form-control" name="street" value="<?php echo $row['street']; ?>" id=" Street" placeholder="Enter Street">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="ciTy">City</label>
                                        <input type="name" class="form-control" name="city" value="<?php echo $row['city']; ?>" id=" ciTy " placeholder="Enter City">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="sTate">State</label>
                                        <input type="text" class="form-control" name="state" id="sTate" value="<?php echo $row['state']; ?> " placeholder=" Enter State">
                                    </div>
                                </div>

                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        <button type="button" id="submit" name="cancle" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>