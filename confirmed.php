<?php
session_start();
$total =0;
$conn = mysqli_connect("localhost", "root", "", "canteen_delivery_system") or die("Connection Error: " . mysqli_error($conn));

foreach($_POST as $x => $x_value) {


$age[$x] = $x_value;
if($x_value=="on"){
$result = mysqli_query($conn," update order_details set status=1 where Order_id='" . $x . "'");
}


}







 ?>

 <html>
 <head>
 <style type="text/css">

 .button{
				padding: 10px 20px;
    background: #2c7ac5;
    border: #d1e8ff 1px solid;
    color: #FFF;
		}
		.button:hover{
			background-color:47C8B4;
		}
 </style>
 </head>

</a> </html>
