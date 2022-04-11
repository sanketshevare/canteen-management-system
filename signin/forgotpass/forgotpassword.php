<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ccc;
            background-repeat: no-repeat;
            background-position: left top;
            background-attachment: fixed;
            background-size: cover;
            
        }

        .main {



            width: 30%;
            height: 90%;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px #000;
            margin-top: 50px;
            margin-bottom: 50px;
            padding: 20px;
            opacity: 0.9;

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

        .main input[type="text"],
        input[type="password"],
        input[type="email"] {
            border: none;
            border: 2px solid #f00;
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
        .dropdown {
      left: calc(40% - 156px);
      padding: 10px;
      width: 85%;
      position: relative;
      display: inline-block;
      margin-top: 20px;
      border: 2px solid #f00;
      background-color: #fff;
      font-size: medium;
    }
    a{
        text-decoration: none;
        font-size: 18px;
        line-height: 25px;
        color: #daf7a6;
    }
    h1
     {
      margin: 0;
      padding: 0 0 20px;
      text-align: center;
      font-size: 30 px;
      font-family: 'Roboto', sans-serif;
    }
    .error {
        color: grey;
        position: absolute;
        top: 0;
    }
    
    </style>
</head>

<body background="../../assets/for.jpg">
    <div class="main">
      
        <form method="post">
      <h1> Forgot Password </h1>

            <input type="text" placeholder="Enter your username" name="username">
            <br><br>


            <select name="security_question" class="dropdown">
                <option value="" disabled selected>Select seurity question</option>
                <option value="What is your previous school name?">What is your previous school name?</option>
                <option value="What is your nickname?">What is your nickname?</option>
                <option value="Who is your favourite actor?">Who is your favourite actor?</option>

            </select>
            <br><br>

            <input type="text" placeholder="Enter your answer" name="answer">
            <br><br>

            <input type="password" placeholder="Enter new password" name="password">
            <br><br>


            <input type="submit" value="Submit" name="submit">
            <br><br>
            <h3 > <a href="../index.php" style=" margin-left: 155px;"> Back to Login</a> </h3>
        </form>
    </div>
</body>

</html>




<?php


if (count($_POST) > 0) {
    $con = mysqli_connect("localhost", "phpmyadmin", "admin", "canteen_delivery_system");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    if (isset($_POST['submit'])) {

        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $security_question = $_REQUEST['security_question'];
        $answer = $_REQUEST['answer'];
        $password = $_REQUEST['password'];

        $query    = "select * from `user` where username='$username' and security_question='$security_question' and answer='$answer'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $query    = "update `user` set password='$password' where username='$username'";
            $result = mysqli_query($con, $query);
            echo "<div class='error'>
            <h3>Password Changed.</h3></div>";
        } else {
            echo "<div class='error'>
            <h3>Try again.</h3>
            </div>";
        }
    }
}

?>