<?php include("../signin/navigation2.php"); ?>


<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
.button{
			
		}
		.button:hover{
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
tr:nth-child(even) {background-color: #f2f2f2}

.container{
  flex: 1;
  align-items: center;
  justify-content: center;
  display: block;
  width: 100%;
  max-width: 100%;
  text-transform: uppercase;
  margin-left: 30%;
}
caption{
  text-align: center;
}
</style>
</head>
<body>
  <div class="container">
<table border="1">
<caption> Menu </caption>
<tr>
<th>Name</th>
<th>Cost</th>
</tr>
<?php

$conn = mysqli_connect("localhost", "phpmyadmin", "admin", "canteen_delivery_system");
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
<a style = "padding: 10px;
  width: auto;
  border-radius: 5px;
  border: 2px solid #ccc;
  margin-right: 50%;"href="./order.php">Order Now</a>
&nbsp;

</body>
</html>
