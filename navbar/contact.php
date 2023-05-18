<?php
error_reporting(E_ALL ^ E_WARNING); 
$userid=$_SESSION['userid'];

include("../signin/navigation2.php");
?>
<div class="container">
  <center>
  <form action="#">
  <label for="fname">username </label>
    <input type="text" id="fname" name="firstname" value="<?php echo $userid ;?>" readonly>
    <br>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
<br>
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."required>
<br>
    <label for="department">Department</label>
    <select id="department" name="department"required>
	   <option value="CS">CS</option>
      <option value="ENTC">ENTC</option>
      <option value="CIVIL">CIVIL</option>
      <option value="MECHANICAL">MECHANICAL</option>
    </select>
    <br>

<center>   
   <label for="subject">Subject</label>

</center>    
<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px; "required></textarea>
	<style>
    body{
      overflow-x: hidden;
    }
	/* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 70%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical; /* Allow the user to vertically resize the textarea (not horizontally) */
}
</style>
<br>
    <input type="submit" value="Submit">
	<style>
	/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}
</style>

<style>
/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;

  padding: 20px;
}
</style>
  </form>
</center>
</div>

<?php
$conn = mysqli_connect("localhost", "root", "", "canteen_delivery_system");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
 $department = $_REQUEST['department'];
$subject = $_REQUEST['subject'];

$qur = "INSERT INTO `queries`(`firstName`, `lastName`, `dept`, `message`) VALUES ('$firstname','$lastname','$department','$subject')";
mysqli_query($conn,$qur);
if($firstname != ""){
  if(mysqli_affected_rows($conn)>0)
{
  echo "<script> alert('Query submitted successfully')</script>";
  
}
else
{
  echo "Query not submitted";
}

}
?>