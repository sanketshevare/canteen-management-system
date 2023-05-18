<?php include("../signin/navigation2.php");
error_reporting(0);

 include("../signin/config/db.php");
 ?>


<!DOCTYPE html>
<html>

<head>
<link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGkCFQFc0dRVnFNKYPyAUN7UfnojKLQHrJ97WYWAAxqDtjFwdRPTKgKZWCfv9e-GgzTxA&usqp=CAU">

  <title>Table with database</title>
  <style>
    body{
     
      background-color: #f8c390;
    }
    .button:hover {
      background: #3868cd;
    }

    table {

      border-collapse: collapse;
      width: 50%;
      color: #588c7e;
      font-family: monospace;
      font-size: 25px;
      text-align: left;
      margin-left: 30%;
    }

    h4 {
      text-transform: capitalize;
      margin-left: 70%;
    }

    th {
      background-color: #588c7e;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2
    }

    .container {
      flex: 1;
      align-items: center;
      justify-content: center;

      text-transform: uppercase;

    }

    caption {
      text-align: center;
    }
  </style>
</head>

<body>
  <?php
  $sql = "SELECT credit_amount FROM user WHERE credit_amount and username = '$userid' ";
  $result1 = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result1);
  $credit_amount = $row['credit_amount'];

  if($credit_amount ==0){
    echo "<script>alert('Your Available credits are low please add some credits'); </script>";


  }
  echo "<div><h4>Your Available Balance is: $credit_amount</h4></div>";
  ?>
  <div class="container">
    <table border="1">
      <caption> Menu </caption>
      <tr>
        <th>Name</th>
        <th>Cost</th>
      </tr>
      <?php

    

      
      $sql = "SELECT * FROM food_items where include=1";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["item_name"] . "</td><td>" . $row["price"] . "</td>";
        }
        echo "</table>";
      } else {
        echo "0 results";
      }
      $conn->close();
      ?>
    </table>

    <br>
    <br>
    <center>
      <a style="padding: 10px;
  width: auto;
  border-radius: 5px;
  border: 2px solid #ccc;
  margin-left: 10%;" href="./order.php">Order Now</a>
    </center>

</body>

</html>