<?php
 session_start();
 
include 'dbh.php';
$first = $_POST['first'];
$last  = $_POST['last'];
$username = $_POST['username'];
$password = $_POST['password'];
$age = $_POST['age'];
$nationality = $_POST['nationality'];
$email = $_POST['email'];


if (empty($first)){

   header ("Location: signuppg.php?error=empty");
   exit();
   }
   
if (empty($nationality)){

   header ("Location: signuppg.php?error=empty");
   exit();
   }

if (empty($username)){

   header ("Location: signuppg.php?error=empty");
   exit();
   }
if (empty($password)){

   header ("Location: signuppg.php?error=empty");
   exit();
   }
if (empty($age)){

   header ("Location: signuppg.php?error=empty");
   exit();
   }
if (empty($last)){

   header ("Location: signuppg.php?error=empty");
   exit();
   }
else{
  $sql = "SELECT username FROM userss WHERE username='$username'";
  $result = mysqli_query($conn,$sql);
  $uidcheck = mysqli_num_rows($result);
   if($uidcheck > 0){
    header ("Location: signuppg.php?error=username");
     exit();
    }  else {
   
  
  $sql = "INSERT INTO userss (first, last, username, password, age, nationality)
  VALUES ('$first', '$last', '$username', '$password','$age', '$nationality')";
    $result  = mysqli_query($conn,$sql); 
  $idd = mysqli_insert_id($conn);
  
  $sqll = "INSERT INTO emails (email, idd)
  Values ('$email','$idd')";
  $resultt  = mysqli_query($conn,$sqll);
  if (!$resultt) die (mysqli_connect_error());
    header("Location: acc.php");
}
}
  