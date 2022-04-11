<?php


$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","phpmyadmin","admin","canteen_delivery_system");
		if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	$a=$_POST['Faculty_name'];
	$sql="select * from user   where username='$a' ";
	$result = mysqli_query($conn,$sql);
	$row=mysqli_num_rows($result);

	if ($row ==0)
 {
		$message = "invalid item name\\nTry again.";
		echo "<script type='text/javascript'>alert('$message');</script>";

	}

	$sql=" delete  from user  where  username='" . $_POST["Faculty_name"] . "' ";
	$result = mysqli_query($conn,$sql);
}





?>


<!DOCTYPE html>
<html lang="en">

<head><style>
      
      .div1 {
          display: flex;
          flex-direction: row;
          justify-content: center;
          align-items: center;
          background-color: #ccc;
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
            text-align: center;
      }

      .btn {
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
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
                          <form name="Add_Item" method="post" action="">
					<div class="message"><?php if($message!="") { echo $message; } ?></div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-4" type="text"name="Faculty_name" required placeholder="Enter username to remove">
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



