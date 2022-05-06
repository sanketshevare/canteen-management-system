<?php
include("../signin/navigation2.php");
// include("../db.php");
 // include("../db.php");
 $conn = mysqli_connect("localhost", "phpmyadmin", "admin", "canteen_delivery_system");
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }



$userid = $_SESSION['userid'];
//  echo $userid;


$stmt = $conn->prepare("INSERT INTO order_details (username,item_name,item_qty,total_bill) VALUES (?,?,?,?)");
$stmt->bind_param("ssii",$userid,$_POST['item_name'],$_POST['quantity'],$_POST['total_bill']);
$stmt->execute();


?>

<html>
<title></title>
<style>
  body{
    background-color: skyblue;
  }
h4{
    text-transform: capitalize;
    margin-left: 60%;
  }
  .button:hover {
    background: #3868cd;
  }

  table {
  display: inline-;
border-collapse: collapse;
width: 50%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}

  th {
    background-color: #588c7e;
    color: white;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2
  }

  #div1{
    flex: 1;
  align-items: center;
  justify-content: center;
  display: block;
  
  text-transform: uppercase;
  margin-left: 30%;
  }
</style>
</head>

<body>
  <div id="div1">
    <table border="1">
      <caption style="text-align: center;"> Orders </caption>
      <tr>
        <th>Item_name</th>
        <th>QTY</th>
        <th>BILL</th>
        <th>Time</th>
        <th>Status</th>


      </tr>
      <?php
     $sql = "SELECT credit_amount FROM user WHERE credit_amount>100 and username = '$userid' ";
     $result1 = mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result1);
     $credit_amount = $row['credit_amount'];
     echo "<div><h4>Your Available Balance is: $credit_amount</h4></div>";
      $sql = "SELECT *  FROM order_details where username= '$userid' ORDER BY timestamp DESC";
     

      $result = $conn->query($sql);
      if ($result->num_rows >= 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          $temp1 = substr($row['timestamp'], 11, 9);
          $status = $row['Status'];
          if($status == 1)
          {
            $status = "Ready";
          }
          else
          {
            $status = "Pending";
          }
          echo "<tr><td>" . $row["item_name"] . "</td><td>" . $row["item_qty"] ."</td><td>" . $row['total_bill'] . "</td><td>" . $temp1 . "</td><td>" . $status. "</td>";
        }
        echo "</table>";
      } else {
        echo "0 results";
      }
      $conn->close();
      ?>
    </table>
  </div>

  <div id="div2" style="display: none;">
    <table border="1">
      <caption> Orders </caption>
      <tr>
        <th>Item_name</th>
        <th>QTY</th>
        <th>BILL</th>
        <th>Time</th>
        <th>Date </th>
      </tr>
      <?php
      $conn = mysqli_connect("localhost", "phpmyadmin", "admin", "canteen_delivery_system");
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

     
      $sql = "SELECT *  FROM order_details where username= '$userid'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          $temp1 = substr($row["timestamp"], 11, 9);
          $temp2 = substr($row["timestamp"], 0, 10);
          echo "<tr><td>" . $row["item_name"] . "</td><td>" . $row["item_qty"] . "</td><td>" . $row['total_bill'] . "</td><td>". $temp1 . "</td><td>" . $temp2 . "</td>";
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

  </div>
 
</body>

</html