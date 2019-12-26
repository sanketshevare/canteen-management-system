<?php
session_start();
$total =0;
$_SESSION["Page_NO"]=1;
$conn = mysqli_connect("localhost", "root", "", "canteen_delivery_system") or die("Connection Error: " . mysqli_error($conn));
$result = mysqli_query($conn," update food_items set include=0 where 1");
foreach($_POST as $x => $x_value) {
$temp = str_replace("_"," ","$x");

$age[$temp] = $x_value;
if($x_value=="on"){
$result = mysqli_query($conn," update food_items set include=1 where item_name='" . $temp . "'");
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
