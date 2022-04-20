<?php
include("../signin/navigation2.php");
// include("../db.php");
$conn = mysqli_connect("localhost", "phpmyadmin", "admin", "canteen_delivery_system");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($conn, "SELECT * FROM food_items WHERE include=1");




?>
<html>

<head>
  <style>
    /* Fitting Inputs Styling */

    .form-group {
      display: flex;
      flex-flow: row wrap;
      margin: 0 -1rem 1rem -1rem;
      align-items: center;
      justify-content: center;

    }

    [class*="form-col"] {
      flex: 0 1 100%;
      padding: 0 1rem;
    }

    @media (min-width: 576px) {
      .form-col-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
      }

      .form-col-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
      }

      .offset-form-col-4 {
        margin-left: 33.33333%;
      }

    }

    input {
      display: block;
      width: auto;
      padding: 10px;
      border: 2px solid #ccc;
      border-radius: 5px;
    }

    label,
    select {
      display: block;
      width: 100%;
      max-width: 100%;
      text-transform: uppercase;
    }

    button {
      padding: 10px;
      width: auto;
      border-radius: 5px;
      border: 2px solid #ccc;
      margin-right: 150px;
    }

    .container {
      background-color: #ccc;
      flex: 1;
      align-items: center;
      justify-content: center;
      max-height: 100%;
    }
  </style>
</head>

<body>
  <div class="container">
    <form action="./confirmation.php" method='post'>
      <fieldset>
        <legend>Items Available</legend>
        <?php
         
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {


        ?>
          <div class="form-group">
            <div class="form-col-4">
              <label for="fname"><?= $row["item_name"]; ?></label>
            </div>
            <div class="form-col-8">
              <input type="hidden" name="item_name" value="<?= $row["item_name"]; ?>">
              <input type="text" name="quantity" value ="0" min="0">
              <input type="hidden" name="price" value="<?= $row["price"]; ?>">
            </div>
          </div>

        <?php
          $i++;
        }

        ?>

<center>
            <style>
              #order_submit{
            padding: 10px;
                  width: auto;
                  border-radius: 5px;
                  cursor: pointer;
                  border: 2px solid black;
                  margin-right: 17%;
              }
              </style>
          <input type="submit" id="order_submit" name="Order Now" value="Order Now">
         </center>
        <br>
        <br>
 
      </fieldset>
  </div>
  </form>


  <?php
  mysqli_close($conn);
  ?>