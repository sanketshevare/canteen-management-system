<?php 
error_reporting(0);

include("../signin/navigation2.php");
   include("../signin/config/db.php");
   $conn = mysqli_connect("localhost", "root", "", "canteen_delivery_system");
   if (mysqli_connect_errno()) {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   $userid = $_SESSION['userid'];
   $sql = "SELECT credit_amount FROM user WHERE credit_amount>100 and username = '$userid' ";
   $result1 = mysqli_query($conn, $sql);
   $row = mysqli_fetch_array($result1);
   $credit_amount = $row['credit_amount'];
   $result = mysqli_query($conn, "SELECT * FROM food_items WHERE include=1");
   ?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
      <style>
        .result{
         color:red;
        }
        td
        {
          text-align:center;
        }
      section{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 90vh;
      }
      </style>
   </head>
   <body >
    <center>
    <section class="mt-3">
         <div class="container-fluid">
         <h4 class="text-center" style="color:green"> Order Details</h4>
         <!-- <h6 class="text-center"> Shine Metro Mkadi Naka (New - Delhi)</h6> -->
         <div class="row">
            <div class="col-md-5  mt-4 ">
               <table class="table" style="background-color:#f5f5f5;">
                  <thead>
                     <tr>
                        <th>No.</th>
                        <th>Meal Items</th>
                        <th style="width: 31%">Qty</th>
                        <th>Price</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td scope="row">1</td>
                        <td style="width:60%">
                           <select name="vegitable" id="vegitable"  class="form-control">
                              <option value="select">
                                 select
                              </option>
                              <?php 
                                 $sql = "SELECT * FROM food_items";
                                 $query = mysqli_query($conn,$sql);
                                 while($row = mysqli_fetch_assoc($query)){
                                 ?>
                              <option id="<?php echo $row['item_id']; ?>" value="<?php echo $row['item_name']; ?>" class="vegitable custom-select">
                                 <?php echo $row['item_name']; ?>
                              </option>
                              <?php  }?>   
                           </select>
                        </td>
                        <td style="width:1%">
                          <input type="number" id="qty" min="0" value="0" class="form-control">
                        </td>
                        <td>
                           <h4 id="price"></h4>
                        </td>
                        <td><button id="add" class="btn btn-primary">Add</button></td>
                     </tr>
                  </tbody>
               </table>
               <div role="alert" id="errorMsg" class="mt-5" >
                 <!-- Error msg  -->
              </div>
            </div>
            <div class="col-md-7  mt-4" style="background-color:#f5f5f5;">
               <div class="p-4">
                  <div class="text-center">
                     <h4>Receipt</h4>
                  </div>
                  <span class="mt-4"> Time : </span><span  class="mt-4" id="time"></span>
                  <div class="row">
                     <div class="col-xs-6 col-sm-6 col-md-6 ">
                        <span id="day"></span> : <span id="year"></span>
                     </div>
                     <!-- <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                        <p>Order No:</p>
                     </div> -->
                  </div>
                  <div class="row">
                     </span>
                     <table id="receipt_bill" class="table">
                        <thead>
                           <tr>
                              <th> No.</th>
                              <th>Product Name</th>
                              <th>Quantity</th>
                              <th class="text-center">Price</th>
                              <th class="text-center">Total</th>
                           </tr>
                        </thead>
                        <tbody id="new" name="new" >
                          
                        </tbody>
                        <tr>
                           <td> </td>
                           <td> </td>
                           <td> </td>
                           <td class="text-right text-dark" >
                                <h5><strong>Sub Total:  ₹ </strong></h5>
                                <h5><strong>Tax (5%) : ₹ </strong></h5>
                           </td>
                           <td class="text-center text-dark" >
                              <h5> <strong><span id="subTotal"></strong></h5>
                              <h5> <strong><span id="taxAmount"></strong></h5>
                           </td>
                        </tr>
                        <tr>
                           <td> </td>
                           <td> </td>
                           <td> </td>
                           <td class="text-right text-dark">
                              <h5><strong>Gross Total: ₹ </strong></h5>
                           </td>
                           <td class="text-center text-danger">
                              <h5 id="totalPayment"><strong> </strong></h5>
                               
                           </td>
                        </tr>
                     </table>
                  </div>
                  <form action="" method=""POST>
                    <input type="submit" >
                  </form>
               </div>
            </div>
         </div>
      </section>
    </center>
   </body>
</html>
<script>


function createCookie(name, value, days) {

  let text = new Date().getTime().toString();
let result = text.substr(0, 10);
    var expires;
      
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
      
    document.cookie = escape(name) + "=" + 
        escape(value) + expires + "; path=/";
}


   $(document).ready(function(){
     $('#vegitable').change(function() {
      var id = $(this).find(':selected')[0].id;
       $.ajax({
          method:'POST',
          url:'./fetch.php',
          data:{id:id},
          dataType:'json',
          success:function(data)
            {
               $('#price').text(data.price);
               //$('#qty').text(data.product_qty);
            }
       });
     });
    
     //add to cart 
     var count = 1;
     $('#add').on('click',function(){
    
        var name = $('#vegitable').val();

        var qty = $('#qty').val();
        var price = $('#price').text();
       

        if(qty == 0)
        {
           var erroMsg =  '<span class="alert alert-danger ml-5">Minimum Qty should be 1 or More than 1</span>';
           $('#errorMsg').html(erroMsg).fadeOut(9000);
        }
        else
        {
           billFunction(); 

           function storeItem(name, quantity) {
      $.ajax({
        method: 'POST',
        url: './store.php',
        data: {
          name: name,
          quantity: quantity
        },
        success: function(response) {
          console.log('Item stored in the database.');
        
        },
        error: function(xhr, status, error) {
          console.error('Error storing item in the database:', error);
        }
      });
    }
           storeItem(name, qty); // Store the item in the database

          
        }
        function billFunction()
          {
          var total = 0;
       
          $("#receipt_bill").each(function () {
          var total =  price*qty;
          var subTotal = 0;
          subTotal += parseInt(total);
          
          var table =   '<tr><td>'+ count +'</td><td>'+ name + '</td><td>' + qty + '</td><td>' + price + '</td><td><strong><input type="hidden" id="total" value="'+total+'">' +total+ '</strong></td></tr>';
          $('#new').append(table)
 
           // Code for Sub Total of Vegitables 
            var total = 0;
            $('tbody tr td:last-child').each(function() {
                var value = parseInt($('#total', this).val());
                if (!isNaN(value)) {
                    total += value;
                }
            });
             $('#subTotal').text(total);
               
            // Code for calculate tax of Subtoal 5% Tax Applied
              var Tax = (total * 5) / 100;
              $('#taxAmount').text(Tax.toFixed(2));
 
             // Code for Total Payment Amount
 
             var Subtotal = $('#subTotal').text();
             var taxAmount = $('#taxAmount').text();
 
             var totalPayment = parseFloat(Subtotal) + parseFloat(taxAmount);
             $('#totalPayment').text(totalPayment.toFixed(2)); // Showing using ID 
             createCookie("total", totalPayment, "10");
            createCookie("item_name", name, "10");
            createCookie("qty", qty, "10");    
            // createCookie("userid", , "10");    

   


  //   <?php 
  //   $userid = $_SESSION['userid'];

  //    $total =  $_COOKIE["total"];
  //    $item_name = $_COOKIE["item_name"];
  //    $qty =  $_COOKIE["qty"];
  //    $sql1 = "INSERT INTO order_details (username, item_name, item_qty, total_bill) VALUES ('$userid', ' $item_name', '$qty', ' $total')";
  // $conn->query($sql1);
  // ?>
// Function to create the cookie

         });
         count++;
        }
         
       });
           // Code for year 
             
           var currentdate = new Date(); 
             var datetime = currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/"
                + currentdate.getFullYear();
                $('#year').text(datetime);
 
           // Code for extract Weekday     
                function myFunction()
                 {
                    var d = new Date();
                    var weekday = new Array(7);
                    weekday[0] = "Sunday";
                    weekday[1] = "Monday";
                    weekday[2] = "Tuesday";
                    weekday[3] = "Wednesday";
                    weekday[4] = "Thursday";
                    weekday[5] = "Friday";
                    weekday[6] = "Saturday";
 
                    var day = weekday[d.getDay()];
                    return day;
                    }
                var day = myFunction();
                $('#day').text(day);
     });

   
</script>
 
<!-- // Code for TIME -->
<script>
    window.onload = displayClock();
 
     function displayClock(){
       var time = new Date().toLocaleTimeString();
       document.getElementById("time").innerHTML = time;
        setTimeout(displayClock, 1000); 
     }
</script>

<?php 


$userid = $_SESSION['userid'];
$result = mysqli_query($conn, "SELECT * FROM food_items WHERE include=1");
$sql = "SELECT credit_amount FROM user WHERE credit_amount>100 and username = '$userid' ";
$result1 = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result1);
$credit_amount = $row['credit_amount'];
// echo "<h2>Order Details</h2>";
// echo "<h3>Your Total Credit Amount is: $credit_amount</h3>";
     $total =  $_COOKIE["total"];
//     echo $total;
//      echo $_COOKIE["item_name"];
//     echo $_COOKIE["qty"];
// $error= $_COOKIE['err'];
// echo $error;

if(isset($_POST['submit'])){
      // $error=$_SESSION['err']  ;
      if($credit_amount>=$total || $credit_amount!=0){

         $credit_amount = $credit_amount - $total;
         $sql = "UPDATE user SET credit_amount = '$credit_amount' WHERE username = '$userid' ";
         $conn->query($sql); 
         echo $error;

      }
       
  $userid = $_SESSION['userid'];
  header('Location: order_details.php');
  redirect("./order_details.php");
}
?>