<?php
$conn = mysqli_connect("localhost", "root", "", "canteen_delivery_system") or die("Connection Error: " . mysqli_error($conn));
$result = mysqli_query($conn, "SELECT * FROM order_details where Status='0' ORDER BY timestamp DESC ");
?>
<html>
<head>
<style type="text/css">
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
<div style="background-color:white;"><form action="confirmed.php" method='post'>
<fieldset style="border:solid 5px;">
  <legend>Item Orders</legend>
	<table style="border:solid">
		<tr>
				<th style="border:none;border-right:solid;border-bottom:dashed">N Block </th>
				<th style="border:none;border-bottom:dashed;">D Block </th>
		</tr>

		<tr>

			<td style="border:none; border-right:solid;border-bottom:solid;">
				<table >
<?php
$i=0;
$result = mysqli_query($conn, "SELECT * FROM order_details where Status='0'and d_address LIKE 'n%' ORDER BY timestamp DESC ");

while($row = mysqli_fetch_array($result)) {
?>
<tr style="border:none; border-right:solid;">

  <td style="border:none;border-right: dotted;"><input type="checkbox" name="<?=$row["Order_id"];?>"  > </td><td><?=$row["username"];?></td> <td> <?=$row["item_name"];?></td> <td style="border-right:dotted;"><?=$row["item_qty"];?></td> <td><?=substr($row["d_address"],1,3)?></td>

</tr>
<?php
$i++;
}
?>

</table>
</td>

<td style="border-bottom:solid">
	<table >
<?php
$i=0;
$result = mysqli_query($conn, "SELECT * FROM order_details where Status='0'and d_address LIKE 'd%' ORDER BY timestamp DESC ");

while($row = mysqli_fetch_array($result)) {
?>
<tr>

	<td style="border:none;border-right: dotted;"><input type="checkbox" name="<?=$row["Order_id"];?>"  > </td><td><?=$row["username"];?></td> <td> <?=$row["item_name"];?></td> <td style="border-right:dotted;"><?=$row["item_qty"];?></td> <td><?=substr($row["d_address"],1,3)?></td>


</tr>
<?php
$i++;
}
?>

</table>
</td>
</tr>
<tr>
		<th style="border:none;border-right:solid;border-bottom:dashed">B Block </th>
		<th style="border:none;border-bottom:dashed">A Block </th>
</tr>
<tr>
	<td style="border-right:solid">
		<table >
<?php
$i=0;
$result = mysqli_query($conn, "SELECT * FROM order_details where Status='0'and d_address LIKE 'b%' ORDER BY timestamp DESC ");

while($row = mysqli_fetch_array($result)) {
?>
<tr>

	<td style="border:none;border-right: dotted;"><input type="checkbox" name="<?=$row["Order_id"];?>"  > </td><td><?=$row["username"];?></td> <td> <?=$row["item_name"];?></td> <td style="border-right:dotted;"><?=$row["item_qty"];?></td> <td><?=substr($row["d_address"],1,3)?></td>


</tr>
<?php
$i++;
}
?>

</table>
</td>

<td>
<table >
<?php
$i=0;
$result = mysqli_query($conn, "SELECT * FROM order_details where Status='0'and d_address LIKE 'a%' ORDER BY timestamp DESC ");

while($row = mysqli_fetch_array($result)) {
?>
<tr>

	<td style="border:none;border-right: dotted;"><input type="checkbox" name="<?=$row["Order_id"];?>"  > </td><td><?=$row["username"];?></td> <td> <?=$row["item_name"];?></td> <td style="border-right:dotted;"><?=$row["item_qty"];?></td> <td><?=substr($row["d_address"],1,3)?></td>

<?php
$i++;
}
?>

</table>
</td>
</tr>
</table>
<br>
<br>
<button type="submit" class="button"> Confirm </submit>
</fieldset>
</div>
</form>

<br>


<?php
mysqli_close($conn);
?>
