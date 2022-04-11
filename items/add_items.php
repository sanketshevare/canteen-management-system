<?php

$message = "";
if (count($_POST) > 0) {
    $conn = mysqli_connect("localhost", "phpmyadmin", "admin", "canteen_delivery_system");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $result = mysqli_query($conn, " insert into food_items values ('"  . $_POST["Item_name"] . "','" . $_POST["Item_cost"] . "','1')");

    if (!$result) {
        $message = "invalid item\\nTry again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
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
        }

        .div2 {

            background-image: url("../assets/item.jpg");
            height: 80vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            border-radius: 10px;
            margin-top: 10px;
            margin-bottom: 10px;
            padding: 20px;
            opacity: 0.9;
            width: 300px;

        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            width: 100%;
            text-align: center;
            font-family: arial;
        }

        input {
            width: 80%;
            padding: 12px 20px;
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
            width: 50%;
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
                            <h2 class="title">Enter Item Details</h2>
                            <form name="Add_Item" method="post" action="">
                                <div class="message"><?php if ($message != "") {
                                                            echo $message;
                                                        } ?></div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <input class="input--style-4" type="text" name="Item_name" required placeholder="Enter item name">
                                        </div>
                                    </div>

                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <input class="input--style-4" type="text" name="Item_cost" pattern="[0-9]*" required placeholder="Enter item price">
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
        
        <div>
            <h2>Available Items in Menu</h2>
        <marquee behavior="scroll" direction="up" style="text-align: center;">

            <?php

            $conn = mysqli_connect("localhost", "phpmyadmin", "admin", "canteen_delivery_system");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM food_items";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo " <p>" . $row["item_name"] . " -" . $row["price"] .  " Rs </p>";
                }
            }
             else {
                echo "0 results";
            }
            $conn->close();

            ?>
 </marquee>
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