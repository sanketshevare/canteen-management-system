<!DOCTYPE html>
<html lang="en">

<head>
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
            background-image:url("https://images.pexels.com/photos/842571/pexels-photo-842571.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;

        }
    </style>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body >
  
<div class="pos">
    <nav class="navbar navbar-default">
    
        <div class="container-fluid">
            <div class="navbar-header">
               
               <a> <img src=".././assets/logo.jpg" alt=""/></a>
            </div>
            <ul class="nav navbar-nav">
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
                <li><a href="../status.php" >Order Details</a></li>
                <li style="float:right; margin-left:800px;"><a href="../signin/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a> </li>
            </ul>
        </div>
    </nav>
    </div>

    <marquee behavior="scroll" direction="left" scrollamount= "15" style="text-align: center  ;  ">
 
    <div style="display: flex; align-items: center; justify-content: center; ">
        <h1 
        style=" background: -webkit-linear-gradient(yellow, red, black);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-weight: bolder;
  text-align: center;
  "    
        >Welcome, To Canteen Management System</h1>
    </div>
    </marquee>

    <?php ?>