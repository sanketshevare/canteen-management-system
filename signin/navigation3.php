<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGkCFQFc0dRVnFNKYPyAUN7UfnojKLQHrJ97WYWAAxqDtjFwdRPTKgKZWCfv9e-GgzTxA&usqp=CAU">

    <style>
        .pos{
            position: sticky;
        }
        li a,
        .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        
        li.dropdown {
            display: inline-block;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }

        img{
            width: 50px;
            height: 50px;
            border-radius: 25px;
        }
        body{
            background-image:url("https://img.freepik.com/free-photo/big-sandwich-hamburger-with-juicy-beef-burger-cheese-tomato-red-onion-wooden-table_2829-19631.jpg?size=626&ext=jpg&ga=GA1.2.17414822.1684431089&semt=sph");
            background-size: cover;
            background-repeat: no-repeat;
            /* background-position: center; */

        }
    </style>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body  >
  
<nav class="navbar navbar-inverse" style="background-color:cream;">
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
            <ul class="nav navbar-nav" >
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Items</a>
                    <div class="dropdown-content">
                        <a href="../items/add_items.php" >Add Items</a>
                        <a href="../items/remove_items.php" >Remove Items</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Users</a>
                    <div class="dropdown-content">
                        <a href="../user/remove_users.php" >Remove Users</a>
                    </div>
                </li>
                <li><a href="../user/add_credits.php" >Add Credits</a></li>

                <li><a href="../food/include_food.php">Include food</a></li>
                <li><a href="../status/status.php" >Order Details</a></li>
                <li><a href="../user/query.php" >Queries</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                    <li><a href="../signin/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
        </div>
    </nav>
    </div>

    <div style="margin-top: -50px;">
    <marquee behavior="scroll" direction="left" scrollamount= "15" style=" margin-top: -15px;">
 
     <h1 
     style=" background: -webkit-linear-gradient(yellow, red, black);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
font-weight: bolder;
"    
     >Welcome, To Canteen Management System</h1>
 </marquee>
    </div>

    <?php ?>