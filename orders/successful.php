<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
<style>
.main {


      
width: 30%;
height: 100%;
border-radius: 10px;
box-shadow: 0px 0px 10px 0px #000;
background-color: #3edbf0;
margin-top: 50px;
margin-bottom: 50px;
padding: 20px;
margin-left: 35%;
margin-top: 10%;


}

</style>
</head>

<body>
    <div class="main">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">

                    <?php
                    session_start();

                    if ($_SESSION["Page_NO"] == 1) {
                        $conn = mysqli_connect("localhost", "phpmyadmin", "admin", "canteen_delivery_system") or die("Connection Error: " . mysqli_error($conn));
                        echo "<center>";




                        foreach ($_SESSION["order_details"] as $key => $val) {
                            if ($val > 0) {
                                $result = mysqli_query($conn, " insert into order_details(username,item_name,item_qty,d_address) values('" . $_SESSION["userid"] . "','$key','$val','" . $_SESSION["delivery_add"] . "')");
                            }
                        }

                        $result = mysqli_query($conn, " select credit_amount from user where username= '" . $_SESSION["userid"] . "' ");
                        $temp = 0;


                        while ($row = mysqli_fetch_assoc($result)) {
                            $temp = $row["credit_amount"];
                        }

                        $temp = $temp - $_SESSION["total_bill"];


                        $result = mysqli_query($conn, " update user SET credit_amount=$temp where username= '" . $_SESSION["userid"] . "' ");

                        echo " <h1>Order placed successfully</h1>  ";
                        echo "<br>";
                        $result = mysqli_query($conn, " select credit_amount from user where username= '" . $_SESSION["userid"] . "' ");

                        if (mysqli_num_rows($result) > 0) {

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo " <h2>The current balance is " . $row["credit_amount"] . "</h2> ";
                            }
                        } else {
                            echo "0 results";
                        }
                        $_SESSION["Page_NO"] = 2;
                    }




                    ?>




                    <div class="p-t-15">
                        <a href="order.php"> <button class="btn btn--radius-2 btn--blue">Order Again</button></a> &nbsp
                        <a href="homepage.html"><button class="btn btn--radius-2 btn--blue">HomePage</button></a>
                    </div>

                </div>
            </div>
        </div>
    </div>




</html>
<!-- end document-->