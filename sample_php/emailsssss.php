<?php 
include 'dbh.php';
$email = $_POST['email'];

$sql = "INSERT INTO emails (email)
  VALUES ('$email')";
 
  $resultt = mysqli_query($conn,$sql);
   header("Location: acc.php");  
?>
<form action="emailss.php" method="POST">
               <input type="text" name="email" placeholder="Email" style="width: 224px"><br>
               <button type ="submit">Submit</button>
               </form>




?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

</body>

</html>
