


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    
					<?php
session_start();
$total =0;
$_SESSION["Page_NO"]=1;
$_SESSION["Bal"]=0;
$_SESSION["Bill"]=0;
$conn = mysqli_connect("localhost", "root", "", "canteen_delivery_system") or die("Connection Error: " . mysqli_error($conn));
foreach($_POST as $x => $x_value) {
$temp = str_replace("_"," ","$x");

$age[$temp] = $x_value;
}
foreach($age as $x => $x_value) {
//echo "Key=" . $x . ", Value=" . $x_value;
$result = mysqli_query($conn," select price  from food_items  where item_name='" . $x . "'");
echo "<center>";
  $_SESSION["delivery_add"]="na";
while($row = mysqli_fetch_assoc($result))
{
  $cost=$row["price"];
  $total  = $total + ( intval($cost) * intval($x_value));
}

if($x =='delivery')
{
  $_SESSION["delivery_add"]=$x_value;
}
}
$_SESSION["order_details"] = $age;
$_SESSION["total_bill"] = $total;
echo "total for the amount is  $total ";
echo "<br>";
$temp;
	$result = mysqli_query($conn," select credit_amount from user where username= '" . $_SESSION["userid"] . "' ");
  if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        echo " The current balance is " . $row["credit_amount"]. " ";
		echo "<br>";
		echo "<br>";

        $temp = $row["credit_amount"];
		if($temp < $total)
		{
        $_SESSION["Bal"]=$row["credit_amount"];
        $_SESSION["Bill"]=$total;
        header("Location: /dbms/unsuccessful.php");
		}

    }


}
 ?>
					
                        
                        
                        
                        <div class="p-t-15">
                          <a href ="successful.php">  <button class="btn btn--radius-2 btn--blue" >Confirm</button></a> &nbsp
							<a href='order.php'><button class="btn btn--radius-2 btn--blue" >Go Back</button></a>
                        </div>
                   
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>



</html>
<!-- end document-->