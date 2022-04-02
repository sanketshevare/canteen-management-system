

<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    body{
      flex: 1;
align-items: center;
justify-content: center;

    }
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

.container{
  display: inline;
  flex-direction: row;
}
  </style>
</head>

<body>
  <div class="main">
    <div class="wrapper wrapper--w680">
      <div class="card card-4">
        <div class="card-body">

          <?php
          $conn = mysqli_connect("localhost", "phpmyadmin", "admin", "canteen_delivery_system") or die("Connection Error: " . mysqli_error($conn));

          //genrerate total bill according to the quantity selected from order page
          $total_bill = 0;
          $total_bill = $_POST['total_bill'];
          $total_bill = $total_bill * $_POST['quantity'];
          echo "<h1>Total Bill: $total_bill</h1>";
          
          ?>




          <div class="container">
          <center>
<a style = "padding: 10px;
  width: auto;
  border-radius: 5px;
  border: 2px solid #000;
  margin-right: 17%;"href="./order_details.php"/>Confirm</a>
   
   

   
<a style = "padding: 10px;
  width: auto;
  border-radius: 5px;
  border: 2px solid #000;
  margin-right: 17%;"href="./order.php"/>Go Back</a>
    </center>
          </div>

        </div>
      </div>
    </div>
  </div>



</html>