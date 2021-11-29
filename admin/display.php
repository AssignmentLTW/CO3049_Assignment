<?php
         require_once("../login/connection.php");
         $info = mysqli_query($conn, "SELECT * FROM users");
         $nRow = 0;
         if ($_SERVER["REQUEST_METHOD"] == "POST") {$nRow = $_POST["delete"];
        
            $sql = "DELETE FROM users WHERE username = (SELECT username FROM users LIMIT ? , 1)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $nRow);
            $stmt->execute();
         }


         echo '<table class="table table-striped">';
            echo '<thead>';
            echo '<tr>';
              echo '<th scope="col">username</th>';
              echo '<th scope="col">password</th>';
              echo '<th scope="col">email</th>';
              echo '<th scope="col">Họ tên</th>';
              echo '<th scope="col">SĐT</th>';
              echo '<th scope="col">Địa chỉ nhà</th>';
              echo '<th scope="col">Phường/Xã</th>';
              echo '<th scope="col">Quận/Huyện</th>';
              echo '<th scope="col">Tỉnh/Thành phố</th>';
              echo '<th scope="col"></th>';
            echo '</tr>';
            echo '</thead>';
          $number = 1;
          while ($row = mysqli_fetch_array($info)) {
            if ($row["admin"] != 'Y') {
                echo '<tbody>';
                echo '<td scope="row">' . $row["username"] . '</td>';
                echo '<td>' . $row["password"] . '</td>';
                echo '<td>' . $row["email"] . '</td>';
                echo '<td>' . $row["fullName"] . '</td>';
                echo '<td>' . $row["phone"] . '</td>';
                echo '<td>' . $row["street"] . '</td>';
                echo '<td>' . $row["town"] . '</td>';
                echo '<td>' . $row["district"] . '</td>';
                echo '<td>' . $row["city"] . '</td>';
                echo '<td>
                      <form  method="POST" id="form">
                        <button type="submit" class="btn btn-primary" name="delete" value =' . $number . '>Delete</button>
                      </form>
                      </td>';
                
              echo '</tbody>';
              $number++;
              }
          }
        echo '</table>';
       
     
?>

