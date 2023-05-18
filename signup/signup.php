
<?php 
$err ="";
?>
<html lang="en" dir="ltr">

<head>

<link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGkCFQFc0dRVnFNKYPyAUN7UfnojKLQHrJ97WYWAAxqDtjFwdRPTKgKZWCfv9e-GgzTxA&usqp=CAU">

  <style>
    body {
      height: 100vh;
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
      opacity: 0.9;


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
      border: 1px solid #ccc;
      padding-left: 20px;
      font-size: 16px;
      margin-top: 20px;
    }



    h1,
    h2 {
      margin: 0;
      padding: 0 0 20px;
      text-align: center;
      font-size: 30 px;
      font-family: 'Roboto', sans-serif;
      color: lime;

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
    input[type="password"],
    input[type="email"] {
      border: none;
      border: 2px solid #f00;
      background-color: #fff;
      border-radius: 5px;
      padding: 20px;
      font-size: 15px;
    }

    .main input[type="submit"] {
      border: none;
      outline: none;
      height: 40px;
      background: #fb2525;
      color: #fff;
      font-size: 20px;
      border-radius: 5px;
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
      color: royalblue;
      font-weight: bold;

    }

    .main a:hover {
      color: green;
    }



    .dropdown {
      left: calc(40% - 156px);
      padding: 10px;
      width: 80%;
      position: relative;
      display: inline-block;
      margin-top: 20px;
      border: 2px solid #f00;
      background-color: #fff;
      font-size: medium;
    }
  </style>
</head>

<body background="../assets/reg1.jpg">


  <div class="main">
  
   <center>
   <form class="" action="#" method="post">

<h1> Canteen Management System </h1>
<br />
<h2>Register</h2>

<input type="text" id="username" name="username" placeholder="Username" autocomplete="on" title="It must be alphanumeric of length 5-15" autofocus required>
<br><br>
<input type="text" id="email" name="email" placeholder="example@gmail.com" autocomplete="on" title="Email" autofocus required>
<br><br>

<input type="password" id="password" name="password" placeholder="Password" autocomplete="off" title="It must contain 8 characters containing atleast one lowercase, one uppercase and one number" required>
<br><br>


<select name="security_question" id="security_question" class="dropdown" required>
  <option value="" disabled selected>Select security question</option>
  <option value="What is your previous school name?">What is your previous school name?</option>
  <option value="What is your nickname?">What is your nickname?</option>
  <option value="Who is your favourite actor?">Who is your favourite actor?</option>
</select>
<br><br>
<input type="text" name="answer" placeholder="Enter your answer">

<br><br>




<input type="submit"  value="Register" name="submit">
<br><br>
<span><b>Already have an account? </b><a href="../signin/index.php">Sign In</a> </span>

</form>
   </center>
  </div>





</body>

</html>

<?php

if (count($_POST) > 0) {
  $con = mysqli_connect("localhost", "root", "", "canteen_delivery_system");
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if (isset($_REQUEST['username'])) {

    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con, $username);
    $email    = stripslashes($_REQUEST['email']);
    $email    = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $security_question = $_POST['security_question'];
    $answer = $_POST['answer'];

    $uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
    $length = strlen($password);
    
    
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {  
      $err = "Invalid Email";
      echo '<script>alert("Invalid Email");</script>';
    } elseif((!preg_match ("/^[a-zA-z0-9]*$/", $username))){
      echo '<script>alert("Invalid Username");</script>';

    }
    elseif(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
      echo '<script>alert("Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character");</script>';

    }
    else {

    $query    = "INSERT into `user` (username, password, email, type, security_question, answer)
             VALUES ('$username', '$password', '$email' , 0, '$security_question', '$answer')";


    $sql = "SELECT * FROM `user` WHERE username='$username' or email='$email'";
    //$sql1 = "SELECT * FROM `user` WHERE email='$email'";

    $res = mysqli_query($con, $sql);
    //$res1 = mysqli_query($con, $sql1);


if (mysqli_num_rows($res) > 0) {
  echo "<script>alert('Username or Email already exists')</script>";
} else {
  if (mysqli_query($con, $query)) {
    echo "<script>alert('User Registered Successfully')</script>";
  }
}
// } else {
$result =  mysqli_query($con, $query);
// }

if ($result) {
  echo "<script>alert('User Registered Successfully')</script>";
  header("Location: ../signin/index.php");
}
}
}
}
?>