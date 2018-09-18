<?php 
include 'dbh.php';
$email = $_POST['email'];

$sqll = "INSERT INTO emails (email)
  VALUES ('$email')";
 
  $resultt = mysqli_query($conn,$sqll);
     
?>