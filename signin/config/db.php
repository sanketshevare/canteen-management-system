<?php
$conn = mysqli_connect("localhost", "root", "", "canteen_delivery_system");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>