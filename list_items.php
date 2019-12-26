<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
.button{
				display: inline-block;
  line-height: 50px;
  padding: 0 50px;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
  cursor: pointer;
  font-size: 18px;
  color: #fff;
  font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  background: #4272d7;
		}
		.button:hover{
			background: #3868cd;
		}

table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body style="background: -webkit-gradient(linear, left bottom, left top, from(#fbc2eb), to(#a18cd1));
  background: -webkit-linear-gradient(bottom, #fbc2eb 0%, #a18cd1 100%);
  background: -moz-linear-gradient(bottom, #fbc2eb 0%, #a18cd1 100%);
  background: -o-linear-gradient(bottom, #fbc2eb 0%, #a18cd1 100%);
  background: linear-gradient(to top, #fbc2eb 0%, #a18cd1 100%);
   background: -webkit-gradient(linear, left bottom, right top, from(#fc2c77), to(#6c4079));
  background: -webkit-linear-gradient(bottom left, #fc2c77 0%, #6c4079 100%);
  background: -moz-linear-gradient(bottom left, #fc2c77 0%, #6c4079 100%);
  background: -o-linear-gradient(bottom left, #fc2c77 0%, #6c4079 100%);
  background: linear-gradient(to top right, #fc2c77 0%, #6c4079 100%);">
  <div style="background-color:white;">
<table border="1">
<caption> Menu </caption>
<tr>
<th>Name</th>
<th>Cost</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "canteen_delivery_system");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM food_items where include=1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["item_name"]. "</td><td>" . $row["price"] . "</td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

<br>
<br>
<center>
<a href="order.php"> <button class="button">Order Now</button> </a><div>
&nbsp;

</body>
</html>
