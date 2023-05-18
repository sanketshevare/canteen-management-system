<?php 
error_reporting(0);
session_start();
$userid = $_SESSION['userid'];
include("../signin/navigation2.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body style="  background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));">
    <center>
    <div style=" float: left; width: 60%; margin-left: 150px;">
    
        <div style="text-align: left; font-size: 25px; text-transform: uppercase; font-weight: bold; color: white; padding: 5px; background-color: purple;">
        <marquee behavior="scroll" direction="left" >
        <?php  echo "Welcome $userid"; ?>
</marquee>

        </div>
        <br>
       <div style="background-color:paleturquoise; padding: 10px; border-radius: 10px; box-shadow: 5px 10px #36454F; ">
       <h1>Guidelines</h1>
       <center>
       <ol style="font-size: 20px; text-align:left; margin-left: 100px;">
            <li>For credits recharge contact directly to admin.</li>
            <li>Please add sufficient credits to place order.</li>
            <li>Kindly give us 10 to 15 minutes to prepare your order.</li>
            <li>You can check order status at order details tab in sidebar.</li>
            <li>For any queries or feedback you can contact us.</li>
        </ol>
       </center>
       </div>
    </div>
</center>
</body>
</html>