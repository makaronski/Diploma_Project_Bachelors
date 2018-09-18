<?php
 session_start();
include 'dbh.php';
$username = $_POST['username'];
$password = $_POST['password'];

 
$sql = "SELECT * FROM userss WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn,$sql);
  if (!$row = mysqli_fetch_assoc($result)) {
     header ("Location: acc.php?error=empty");
   exit();
    } else {
    $sqll = "SELECT * FROM userss INNER JOIN emails ON userss.id = emails.idd WHERE userss.username='$username'";
    $resultt  = mysqli_query($conn,$sqll);
    $roww = mysqli_fetch_assoc($resultt);
     //insert id after $result, then query the join then fetch the joined query
    $_SESSION['first'] = $roww['first'] ;
    $_SESSION['username'] = $roww['username'];
    $_SESSION['last'] = $roww['last'];
    $_SESSION['age'] = $roww['age'];
    $_SESSION['nationality'] = $roww['nationality'];
    $_SESSION['email'] = $roww['Email'];
  }
 header("Location: index.php");
  