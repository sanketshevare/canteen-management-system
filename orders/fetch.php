<?php 
   include("../signin/config/db.php");
 
   $sql = "SELECT * FROM food_items WHERE item_id='".$_POST['id']."'";
   $query = mysqli_query($conn,$sql);
   while($row = mysqli_fetch_assoc($query))
   {
         $data = $row;
   }
    echo json_encode($data);
 ?>