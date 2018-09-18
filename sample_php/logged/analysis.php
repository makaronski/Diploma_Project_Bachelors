<?php
 session_start();
 
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Analysis</title>
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
      <li><a href="../phpBB3" target="_blank">community</a></li>
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
            <div id="content" class="auto-style1" style="overflow: auto; height: 791px; left: 245px; max-height: none; position: absolute; top: 23px; border: thick #000000 double; color: #000000; font: icon; font-family: Calibri; font-size:xx-large;">
           	 &nbsp;&nbsp;<a href="top6.php" style="left: 8px; top: 1px; width: 686px; height: 41px; font-size: 7mm;" style="font-size:3mm">A STATISTICAL LOOK AT THE PREMIER LEAGUE TOP SIX<img src="css/images/main-1.png" height="48" width="48" align="left"></a>
			 &nbsp;&nbsp;<a href="kvm.php" style="left: 8px; top: 1px; width: 686px; height: 41px; font-size: 7mm;" style="font-size:3mm">KARIUS VS. MIGNOLET-WHAT DO THE NUMBERS SAY?<img src="css/images/main-2.png" height="48" width="48" align="left"></a>
             &nbsp;&nbsp;<a href="fff.php" style="left: 8px; top: 1px; width: 686px; height: 41px; font-size: 6mm;" style="font-size:3mm">Fitness, form and fluidity are Liverpool’s big concerns<img src="css/images/featured-side-3.jpg" height="48" width="48" align="left"></a>

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
