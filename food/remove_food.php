<?php


$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","canteen_delivery_system");
		if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	$temp = str_replace("_"," "," . $_POST["Item_name"] . ");
	echo $temp;
	$result = mysqli_query($conn," update food_items set include=0 where item_name= '$temp' ");


}
?>



<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="Add_Item" method="post" action="">
	<div class="message"><?php if($message!="") { echo $message; } ?></div>
		<table border="0" cellpadding="10" cellspacing="1" width="500" align="center" class="tblLogin">
			<tr class="tableheader">
			<td align="center" colspan="2">Enter Item Name</td>
			</tr>
			<tr class="tablerow">
			<td>
			<input type="text" name="Item_name" placeholder="Item_name" class="admin" required></td>
			</tr>

			<tr class="tableheader">
			<td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
			</tr>
		</table>
</form>
<br>
<br>
<center>
<a href="admin.html">
<button style="background-color:#2c7ac5; color:white; padding:10px"> Go back </button>
</body></html>
</body></html>
