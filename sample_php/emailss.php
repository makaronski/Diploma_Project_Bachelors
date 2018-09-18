<?php
 session_start();
 
include 'dbh.php';
$email = $_POST['email'];

$sql = "INSERT INTO emails (email)
  VALUES ('$email')";
 
  $result = mysqli_query($conn,$sql);
   header("Location: acc.php");  
?>
