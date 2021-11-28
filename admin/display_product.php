<?php
         $db = mysqli_connect('localhost','root','','productdb');
         $product = mysqli_query($db, "SELECT * FROM producttb");
         $nRow = 0;
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nRow = $_POST["delete"] - 1;
            $sql = "DELETE FROM producttb WHERE id = (SELECT id FROM producttb LIMIT ? , 1)";
            $stmt = $db->prepare($sql);
            $stmt->bind_param("i", $nRow);
            $stmt->execute();
         }


         echo '<table class="table table-striped">';
            echo '<thead>';
            echo '<tr>';
              echo '<th scope="col">id</th>';
              echo '<th scope="col">Tên sản phẩm</th>';
              echo '<th scope="col">Giá</th>';
              echo '<th scope="col"></th>';
            echo '</tr>';
            echo '</thead>';
          $number = 1;
          while ($row = mysqli_fetch_array($product)) {
                echo '<tbody>';
                echo '<tr>';
                echo '<td scope="row">' . $row["id"] . '</td>';
                echo '<td>' . $row["product_name"] . '</td>';
                echo '<td>' . $row["product_price"] . '</td>';
                echo '<td>
                      <form action="" method="POST" id="form">
                        <button type="submit" class="btn btn-danger" name="delete" value =' . $number . '>Xóa</button>';
                  
                echo  '</form>';
                echo  '</td>';
              echo '</tr>';  
              echo '</tbody>';
              $number++;
          }
        echo '</table>';
       
     
?>

