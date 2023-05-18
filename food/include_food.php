<?php
include("../signin/navigation3.php");

$conn = mysqli_connect("localhost", "root", "", "canteen_delivery_system") or die("Connection Error: " . mysqli_error($conn));
$result = mysqli_query($conn, "SELECT * FROM food_items ");
if($result) {
  echo "<script> alert('Menu updated successfully')</script>";

}
else{
  echo "<script> alert('Something went wrong, Please try again')</script>";
}
?>
<html>
<head>
<link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGkCFQFc0dRVnFNKYPyAUN7UfnojKLQHrJ97WYWAAxqDtjFwdRPTKgKZWCfv9e-GgzTxA&usqp=CAU">

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
  background: #6c4079;
		}
		.button:hover{
			background: #3868cd;
		}

    .d{
      background-color: #fbc2eb;

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
<div style="background-color:white;">
<form action="./include.php" method='post'>

  <div class="d">
    
  <center>
 
<table style="border: 1px solid black; height: 100%; padding: 20px; width: 50%; margin-top: -100px; ">
<caption>  <legend style="text-align:center; font-size: 22px;; font-weight: bold;">Items Available</legend>
</caption>
<th >
  <tr style="border-bottom: 1px solid black; font-size: 20px; font-weight:bold;">
    <td style="padding-left: 90px;">Select</td>
    <td>Item Name</td>
  </tr>
</th>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

  <div ><tr style="border-bottom: 1px solid black; "><td style="margin-left: 40px;  "><input type="checkbox" style="height: 30px; width: 20px; margin-left: 100px; " name="<?=$row["item_name"];?>" ></td><td > <span style="font-size: 20px;"><?=$row["item_name"];?> <span></td></tr><br></div>
  
<?php
$i++;
}
?>
</table>
</center>
<br>
<br>
<center><button type="submit" class="button"> submit  </submit>
</div>
</form>
<br>
</div>


<?php
mysqli_close($conn);
?>
