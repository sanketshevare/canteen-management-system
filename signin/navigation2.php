<!DOCTYPE html>
<html lang="en">

<head>

    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {
            height: 450px
        }

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }

            .row.content {
                height: auto;
            }
        }

        .container-fluid {
            background-color: bisque;
        }

        .links {
            height: 90vh;
        }

        img {
            width: 50px;
            height: 50px;
            border-radius: 25px;
        }

        #menu1 {
            background-image: url("../assets/menu.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;

        }

        p {
            font-size: 20px;
            font-family: "Times New Roman", Times, serif;
            color: #fff;
            border: 2px solid red;
            padding: 10px;
            background-color: #555;
            text-align: center;
            text-shadow: 2px 2px 4px #000000;
            border-radius: 5px;
            text-decoration: none;
            
        }
      
    </style>
</head>

<body>


    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="" href="#"><img src="../assets/logo.jpg" /></a>
            </div>
            <div class=" navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="../navbar/contact.php" target="main">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../signin/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="text-center">
        <div class="links">
            <div class="col-sm-2 sidenav" id="menu1">
                <p><a href="../orders/list_items.php" style="text-decoration: none; color: #fff;">Menu</a></p>
                <p><a href="../orders/order.php" style="text-decoration: none; color: #fff;">Order</a></p>
                <p><a href="../orders/order_details.php" style="text-decoration: none; color: #fff;" >Order Details</a></p>
            </div>