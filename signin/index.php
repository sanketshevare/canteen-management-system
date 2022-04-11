<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">

  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #fff;
      background-repeat: no-repeat;
      background-position: left top;
      background-attachment: fixed;
      background-size: cover;
    }

    .main {



      width: 30%;
      height: 100%;
      border-radius: 10px;
      box-shadow: 0px 0px 20px 0px #000;
     
      margin-top: 50px;
      margin-bottom: 50px;
      padding: 20px;
      opacity: 1.0;

    }

    .logo {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      position: absolute;
      top: -50px;
      left: calc(50% - 50px);
    }

    .main input {
      width: 80%;
      height: 30px;
      border-radius: 25px;
      border: 1px solid red;
      padding-left: 20px;
      font-size: 16px;
      margin-top: 20px;
    }



    h1,
    h3 {
      margin: 0;
      padding: 0 0 20px;
      text-align: center;
      font-size: 30 px;
      font-family: 'Roboto', sans-serif;
      color: lightblue;
    }

    span {

      font-size: 20px;
      display: table;
      font-size: 18px;
      font-family: 'Roboto', sans-serif;
      margin-left: auto;
      margin-right: auto;
    }

    .main input[type="text"],
    input[type="password"] {
      border: none;
      border: 1px solid red;
      background-color: #fff;
      border-radius: 5px;
      padding: 10px;
      font-size: 15px;
      margin-left: 30px;
    }

    .main input[type="submit"] {
      border: none;
      outline: none;
      height: 40px;
      background: #fb2525;
      color: #fff;
      font-size: 20px;
      border-radius: 5px;
      margin-left: calc(40% - 50px);
      margin-top: 20px;
      width: 30%;
    }

    .main input[type="submit"]:hover {
      cursor: pointer;
      background: yellow;
      color: #000;
    }

    .main a {
      text-decoration: none;
      font-size: 18px;
      line-height: 25px;
      color: #fb2525

    }

    .main a:hover {
      color: yellow;
    }
  </style>
</head>
<body background="../assets/login.jpg">
  <div class="main">


    <form class="" action="#" method="post">

      <h1> Canteen Management System </h1>
      <br />
      <h3>Login with your Username and Password</h3>

      <input type="text" id="username" name="userName" placeholder="Username" autocomplete="on" title="It must be alphanumeric of length 5-15" autofocus required>
      <br><br>


      <input type="password" id="password" name="password" placeholder="Password" autocomplete="off" title="It must contain 8 characters containing atleast one lowercase, one uppercase and one number" required>
      <br><br>
      <a style=" margin-left: 40px " ; href="./forgotpass/forgotpassword.php"> Forgot Password? </a>
      <br />
      <input type="submit" value="Sign In" name="submit">
      <br><br>
      <span style="color:aliceblue;">Don't have an account? <a href="../signup/signup.php" style="color: lightgreen;">Sign Up</a> </span>






    </form>

  </div>



</body>

</html>






<?php
$message = "";
if (count($_POST) > 0) {
  $conn = mysqli_connect("localhost", "phpmyadmin", "admin", "canteen_delivery_system");
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $result = mysqli_query($conn, "SELECT * FROM user WHERE username='" . $_POST["userName"] . "' and password = '" . $_POST["password"] . "'");
  $result1 = mysqli_query($conn, "SELECT * FROM user WHERE username='" . $_POST["userName"] . "' and password = '" . $_POST["password"] . "' and type = '1' ");
  $count  = mysqli_num_rows($result);
  $count1  = mysqli_num_rows($result1);
  if ($count == 0) {
    $message = "Invalid Username or Password!";
  } else {
    $message = "You are successfully authenticated!";
    $_SESSION["userid"] = $_POST["userName"];
    header("Location: ./admin.html");
  }
  if ($count1 == 0)
    header("Location: ./user.html");
  else {
    header("Location: ./admin.html");
  }
  exit;
}

?>