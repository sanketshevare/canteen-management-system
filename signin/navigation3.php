<!DOCTYPE html>
<html lang="en">

<head>
    <style>
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
    </style>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
               
               <a> <img src=".././assets/logo.jpg" alt=""/></a>
            </div>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Items</a>
                    <div class="dropdown-content">
                        <a href="../items/add_items.php" target="main">Add Items</a>
                        <a href="../items/remove_items.php" target="main">Remove Items</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Users</a>
                    <div class="dropdown-content">
                        <a href="../user/add_users.php" target="main">Add Users</a>
                        <a href="../user/remove_users.php" target="main">Remove Users</a>
                    </div>
                </li>
                <li><a href="../add_credits.php" target="main">Add Credits</a></li>

                <li><a href="../food/include_food.php" target="main">Include food</a></li>
                <li><a href="../status.php" target="main">Order Details</a></li>
                <li style="float:right; margin-left:800px;"><a href="../signin/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a> </li>
            </ul>
        </div>
    </nav>

    <?php ?>