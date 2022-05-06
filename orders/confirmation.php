<?php

// include("../db.php");
session_start();

$userid = $_SESSION['userid'];
// echo $userid;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    body {
      flex: 1;
      align-items: center;
      justify-content: center;

    }

    .main {



      width: 30%;
      height: 60%;
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px #000;
      background-color: #3edbf0;
      margin-top: 50px;
      margin-bottom: 50px;
      padding: 20px;
      margin-left: 35%;
      margin-top: 10%;
     display: flex;
      align-items: center;
      justify-content: center;


    }

    .container {
      display: inline;
      flex-direction: row;
    }

    #ord_confirm {
      padding: 10px;
      width: auto;
      border-radius: 5px;
      border: 2px solid #000;
      margin-right: 20%;
      cursor: pointer;
    }

    input:-moz-submit {
      padding: 10px;
      width: auto;
      border-radius: 5px;
      border: 2px solid #000;
      margin-right: 20%;
    }

    .btn {
      padding: 10px;
      width: auto;
      margin-right: 20%;
    }
  </style>
</head>

<body>
  <div class="main">
    <div class="wrapper wrapper--w680">
      <div class="card card-4">
        <div class="card-body">

          <?php

          $conn = mysqli_connect("localhost", "phpmyadmin", "admin", "canteen_delivery_system") or die("Connection Error: " . mysqli_error($conn));
          $result = mysqli_query($conn, "SELECT * FROM food_items WHERE include=1");
          $sql = "SELECT credit_amount FROM user WHERE credit_amount>100 and username = '$userid' ";
          $result1 = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result1);
          $credit_amount = $row['credit_amount'];
          echo "<h2>Order Details</h2>";
          echo "<h3>Your Total Credit Amount is: $credit_amount</h3>";


          //genrerate total bill according to the quantity selected from order page
          $total_bill = 0;
          $quantity = $_POST['quantity'];
          $total_bill = $_POST['price'];
          $total_bill =  $total_bill * $quantity;

          $item_name = $_POST["item_name"];
          $remaining_credit = $credit_amount - $total_bill;
       
          while ($row = mysqli_fetch_array($result1)) {
            echo "Item : " . $row['item_name'] . " <br><br>";
            echo "Quantity : $quantity <br><br>";
          }
         
          echo "<h1>Total Bill: $total_bill</h1>";
          echo "Your Available Credit Amount is: $remaining_credit <br><br>";

          $sql = "UPDATE user SET credit_amount = '$remaining_credit' WHERE username = '$userid' ";
          $conn->query($sql); 
          $userid = $_SESSION['userid'];
          echo $userid;
         
         
     //insert username ite_name and quantity into order_details table
          $sql1 = "INSERT INTO order_details (username, item_name, item_qty, total_bill) VALUES ('$userid', '$item_name', '$quantity', '$total_bill')";
          if ($conn->query($sql1) === TRUE) {
           
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
         
          ?>
          <center>
            <div class="container">
              <form action="./order_details.php" method="post">
                <input type="submit" name="ord_confirm" value="Submit" id="ord_confirm">
                <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
                <input type="hidden" name="total_bill" value="<?php echo $total_bill * $count; ?>">
                <input type="hidden" name="item_name" value="<?php echo $item_name ?>">
              </form>
              









              <a class="btn" href="./order.php" />Go Back</a>
          </center>
        </div>

      </div>
    </div>
  </div>
  </div>



</html>