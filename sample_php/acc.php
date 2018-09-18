<?php
 session_start();
 
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Login</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/pagestyle.css" type="text/css" media="all" />
<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
<style type="text/css">
.auto-style1 {
	margin-top: 0;
}
</style>
</head>
<body>
<!-- Header -->
<div id="header";>
</a>
  <div class="shell">
    <!-- Logo -->
    <h1 id="logo" class="notext"><a href="#">Sport Zone Sport Portal</a></h1>
    <!-- End Logo -->
  </div>
</div>
<!-- End Header -->
<div id=""
</div>
<!-- Navigation -->
<div id="navigation">
  <div class="shell">
    <div class="cl">&nbsp;</div>
    <ul>
      <li><a href="newspg.php">news &amp; events</a></li>
      <li><a href="analysis.php">analysis</a></li>
      <li><a href="gallery.php">photo gallery</a></li>
      <li><li><a href="../phpBB3" target="_blank">community</a></li>
      <li><a href="fanz.php">fan zone</a></li>
      
       <li><a href="acc.php">Account</a></li>
       <li style="width: 162px; height: 50px; background-color: #; color: #808080; font-size: medium;" style="visibility:visible" visible="true" enableviewstate="true"  >
       <br><p align="center"><?php
    if (isset($_SESSION['first'])){
      echo "Welcome {$_SESSION['first']}";
    } else {
      echo "You are not logged in";
      }
    ?></p> </li>
    </ul>
    <div class="cl">&nbsp;</div>
  </div>
</div>
<!-- End Navigation -->
<!-- Heading -->
<div id="heading" style="height: 855px">
  <div class="shell">
    <div id="heading-cnt">
      <!-- Sub nav -->
      <div id="side-nav">
        <ul>
          <li class="active">
            <div class="link"><a href="index.php">home</a></div>
          </li>
          <li>
            <div class="link"><a href="ranking.php">ranking</a>
            <div id="content" class="auto-style1" style="overflow: auto; height: 791px; left: 245px; max-height: none; position: absolute; top: 23px; border: thick #000000 double; color: #000000; font: icon; font-family: Calibri; ">
        <form action="login.php" method="POST" style="width: 228px" >
                    <input type="text" name="username" placeholder="Username" style="margin:10px;height:26px"><br>
           <input type="password" name="password" placeholder="Password" style="margin:10px;height:26px"><br>
           <button type="submit" style="width:120px; position:absolute; left: 24px; top: 101px; height:22px">Login
           </button><br>


           </form>
           <div style="font-size:large; height: 55px; position: relative; left: 0px; top: 28px;">
            <?php
                      $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                      if (strpos($url, 'error=empty')!==false){
                         echo "Username or password is incorrect!";
                      }
?>
</div>
           
           <br>
				<form action="logout.php" style="width: 188px; left: 450px; top: 90px; position: absolute;">
					<button style="width: 181px; height: 35px">LOGOUT</button></form>

           	 <br><br>
           <a href="signuppg.php" style="position:absolute;left:441px; width:188px; top: 30px;width: 181px; height: 35px"><button style="width: 181px; height: 35px">SIGN UP</button></a>
          
				
				<p style="text-align:center; font-size:44px; height: 40px;">USER INFO</p>
</form>		
               <div style="border: medium double #000000; height: 118px; color: #000000; font-size: large; position: absolute; left: 120px; top: 319px; width: 445px; text-align: center; display: table;">
               <?php
    if (isset($_SESSION['first'])){
      
      echo "First Name:\n {$_SESSION['first']}"."\r\n";
      echo nl2br("\r\nFamily Name: {$_SESSION['last']}");
      echo nl2br("\nUsername: {$_SESSION['username']}");
      echo nl2br("\nAge: {$_SESSION['age']}");
      echo nl2br("\r\n Nationality: {$_SESSION['nationality']}");
      echo nl2br("\r\n Email Address: {$_SESSION['email']}");


           
    } else {
      echo "You are not logged in";
      }
      

    ?>
               </div>
           </div>
          </li>
          <li>
            <div class="link"><a href="fixtures.php">FIXTURES</a></div>
          </li>
          <li>
            <div class="link"><a href="squad.php">squad</a></div>
                      </li>
          <li>
            <div class="link"><a href="about.php">about the club</a></div>
          </li>
        </ul>
      </div>
      <!-- End Sub nav -->
      <!-- Widget -->
      <!-- End Widget -->
    </div>
  </div>
</div>
<!-- End Heading -->
<!-- Main -->
<!-- End Main -->
<!-- Footer -->
<div id="footer">
</div>
<!-- End Footer -->
  <div class="shell">
    <div class="cl">&nbsp;</div>
    &nbsp;
    <p class="right">&copy; liverpoolfansite.bg Design by Petar Petrov
    <div class="cl">&nbsp;</div>
  </div>
</body>
</html>
