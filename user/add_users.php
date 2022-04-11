<?php


$message = "";
if (count($_POST) > 0) {
    $conn = mysqli_connect("localhost", "phpmyadmin", "admin", "canteen_delivery_system");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $result = mysqli_query($conn, " insert into user (username,password ,type,email) values ('" . $_POST["username"] . "','" . $_POST["password"] . "','" . $_POST["privilage"] . "','" . $_POST["email"] . "')");
}

?>

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

    <style>
      
        .div1 {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            background-color: #ccc;
            border-radius: 5px;
        }

        .div2 {

            background-image: url("../assets/user1.jpg");
            height: 80vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            border-radius: 10px;
            margin-top: 10px;
            margin-bottom: 10px;
            padding: 20px;
            opacity: 0.9;
            width: 100%;

        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            width: 100%;
            text-align: center;
            font-family: arial;
        }

        input {
            width: 30%;
            padding: 15px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 5px;
        }

        .title {
            font-size: 25 px;
            font-family: "Times New Roman", Times, serif;
            color: #fff;
            font-weight: bold;
            text-shadow: 2px 2px 4px #000000;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 20%;
            border-radius: 5px;
            margin-top: 20px;
        }

        p {
            font-size: 20px;
            font-family: "Times New Roman", Times, serif;
            font-weight: bold;

        }
    </style>
</head>

<body>
    <div class="div1">
        <div class="div2">
            <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
                <div class="wrapper wrapper--w680">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="title">Enter User Details</h2>
                            <form name="frmUser" method="post" action="">
                                <div class="message"><?php if ($message != "") {
                                                            echo $message;
                                                        } ?></div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <input class="input--style-4" type="text" name="username" required placeholder="Username">
                                        </div>
                                    </div>

                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <input class="input--style-4" type="password" name="password" required placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <input class="input--style-4" type="email" name="email" placeholder="Email" required " >
                                </div>
                        </div>
						 <div class=" row row-space">
                                        <div class="col-2">
                                            <div class="input-group">
                                                <input class="input--style-4" type="text" name="privilage" placeholder="privilage_type 1 for admin 0 for normal" required pattern="[0 | 1]{1}">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="p-t-15">
                                        <button class="btn btn--radius-2 btn--blue" type="submit" value="Submit">Submit</button>
                                    </div>
                            </form>
                        </div>
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