<?php
  session_start();
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGkCFQFc0dRVnFNKYPyAUN7UfnojKLQHrJ97WYWAAxqDtjFwdRPTKgKZWCfv9e-GgzTxA&usqp=CAU">

    <meta charset="utf-8">
    <title>Canteen Automation System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body >
    <div class="main">
      <img src="logo.jpg" class="logo">

    <form class="" action="home.php" method="post">

      <h1 style="color:red;" > Canteen Automation System </h1>

      <label for="username">Username </label><br>
      <input type="text" id="username" name="username" placeholder="Enter UserName..." autocomplete="on"  title="It must be alphanumeric of length 5-15" autofocus required>
      <br><br>

      <label for="password">Password </label><br>
      <input type="password" id="password" name="password" placeholder="********" autocomplete="off"  title="It must contain 8 characters containing atleast one lowercase, one uppercase and one number" required>
      <br><br>

      <input type="submit" onclick="validate()" value="Sign In" name="submit">


    </form>

    </div>


    <script type="text/javascript">
        function validate() {
  
            var user = document.getElementById("e").value;
            var user2 = document.getElementById("e");
            var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (re.test(user)) {
                alert("done");
                return true;
            }
            else {
                user2.style.border = "red solid 3px";
                return false;
            }
        }
    </script>
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
if($count==1) {
  header("Location: user.php");
  $_SESSION["userid"] = $_POST["userName"];

} else {
  $message = "Invalid Username or Password!";

// $message = "You are successfully authenticated!";

if($count1==1)
header("Location: admin.html");
else {
  $message = "Invalid Username or Password!";
}
exit;

}
}
    ?>
