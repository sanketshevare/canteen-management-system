<?php
  session_start();
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

  <style>
	body {
background-image: url("nirma3.jpg");
background-repeat: no-repeat;
background-position: left top;
background-attachment: fixed;
background-size: cover;
}

.main{
width: 320px;
height: 420px;
background-image: url("bg1.jpg");
background-repeat: no-repeat;
background-position: left top;
background-attachment: fixed;
background-size: cover;
color: #fff;
top: 50%;
left: 50%;
position: absolute;
transform: translate(-50%,-50%);
box-sizing: border-box;
padding: 70px 30px;
}

.logo{
width: 100px;
height: 100px;
border-radius: 50%;
position: absolute;
top: -50px;
left: calc(50% - 50px);
}

.main input{
width: 100%;
margin-bottom: 20px;
}

.main label{
margin: 0;
padding: 0;
font-weight: bold;
}

h1{
margin: 0;
padding: 0 0 20px;
text-align: center;
font-size: 22px;
}

.main input[type="text"], input[type="password"]
{
border: none;
border-bottom: 2px solid #f00;
background: transparent;
outline: none;
height: 50px;
color: #fff;
font-size: 15px;
}

.main input[type="submit"]
{
border: none;
outline: none;
height: 40px;
background: #fb2525;
color: #fff;
font-size: 20px;
border-radius: 20px;
}

.main input[type="submit"]:hover
{
cursor: pointer;
background: yellow;
color: #000;
}

.main a{
text-decoration: none;
font-size: 14px;
line-height: 25px;
color: red;
}

.main a:hover
{
color: green;
}

	</style>
  </head>
  <body>
    <div class="main">
      <img src="logo.jpg" class="logo">

    <form class="" action="#" method="post">

      <h1 style="color:red;" > Canteen Delivery System </h1>

      <label for="username">Username </label><br>
      <input type="text" id="username" name="userName" placeholder="Enter UserName..." autocomplete="on"  title="It must be alphanumeric of length 5-15" autofocus required>
      <br><br>

      <label for="password">Password </label><br>
      <input type="password" id="password" name="password" placeholder="********" autocomplete="off" title="It must contain 8 characters containing atleast one lowercase, one uppercase and one number" required>
      <br><br>

      <input type="submit" value="Sign In" name="submit">






    </form>

    </div>



  </body>
</html>






<?php
$message="";
if(count($_POST)>0) {
$conn = mysqli_connect("localhost","root","","canteen_delivery_system");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($conn,"SELECT * FROM user WHERE username='" . $_POST["userName"] . "' and password = '". $_POST["password"]."'");
$result1=mysqli_query($conn,"SELECT * FROM user WHERE username='" . $_POST["userName"] . "' and password = '". $_POST["password"]."' and type = '1' ");
$count  = mysqli_num_rows($result);
$count1  = mysqli_num_rows($result1);
if($count==0) {
$message = "Invalid Username or Password!";
} else {
$message = "You are successfully authenticated!";
$_SESSION["userid"] = $_POST["userName"];

if($count1==0)
header("Location: /dbms/user.html");
else {
header("Location: /dbms/admin.html");
}
exit;

}
}
    ?>
