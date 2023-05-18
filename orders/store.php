<?php
// Assuming you have already established a database connection
include("../signin/config/db.php");
session_start();
$userid = $_SESSION['userid'];
// Retrieve the item name, quantity, and total bill from the POST data
  $itemName = $_POST['name'];
  $quantity = $_POST['quantity'];
  $totalBill = $_COOKIE['total'];


  $sql = "SELECT credit_amount FROM user WHERE credit_amount>100 and username = '$userid' ";
$result1 = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result1);
$credit_amount = $row['credit_amount'];
  // Perform any necessary data validation here

  // Construct the SQL query to insert the order details into the database
  if($credit_amount>=$totalBill || $credit_amount!=0){
  $sql = "INSERT INTO order_details (username, item_name, item_qty, total_bill) VALUES ('$userid', '$itemName', '$quantity', '$totalBill')";
// Execute the SQL query
  if ($conn->query($sql) === TRUE) {
    echo json_encode(array('success' => true, 'message' => 'Order details stored in the database.'));
  } else {
    echo json_encode(array('success' => false, 'message' => 'Failed to store order details in the database.'));
  }
  // setcookie($error, "insufficient credits", time() + (86400 * 30), "/"); // 86400 = 1 day

}
else {
  // $error;
  $cookie_name = "err";
$cookie_value = "jhjh";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
echo $_COOKIE[ $cookie_name];
}

  // Close the database connection
  $conn->close();
// } else {
//   // Invalid request method
//   echo json_encode(array('success' => false, 'message' => 'Invalid request method.'));
// }
?>
