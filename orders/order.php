<?php
include("../signin/navigation2.php"); 
$conn = mysqli_connect("localhost", "phpmyadmin", "admin", "canteen_delivery_system") or die("Connection Error: " . mysqli_error($conn));
$result = mysqli_query($conn, "SELECT * FROM food_items");



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
  width:auto ;
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
button{
  padding: 10px;
  width: auto;
  border-radius: 5px;
  border: 2px solid #ccc;
  margin-right: 150px;
}
.container{
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
<form action="confirmation.php" method='post'>
<fieldset>
  <legend>Items Available</legend>
<?php

$i=0;
while($row = mysqli_fetch_array($result)) {
?>
 <div class="form-group">
  <div class="form-col-4">
    <label for="fname"><?=$row["item_name"];?></label>
  </div>
  <div class="form-col-8">
  <input type="number" name="<?=$row["item_name"];?>" value="0" min="0" >  
  </div>
</div>

<?php
$i++;
}
?>


		<br>
		<br>
    <center>
<a style = "padding: 10px;
  width: auto;
  border-radius: 5px;
  border: 2px solid #000;
  margin-right: 17%;"href="./confirmation.php"/>Order Now</a>
    </center>
</fieldset>
</div>
</form>


<?php
mysqli_close($conn);
?>
