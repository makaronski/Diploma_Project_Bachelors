<?php
 session_start();
 
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sport Zone</title>
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
            <div id="content" class="auto-style1" style="overflow: auto; height: 791px; left: 245px; max-height: none; position: absolute; top: 23px; border: thick #000000 double; color: #000000; font: icon; font-family: Calibri; font-size: medium;">
<p style="font-style:oblique; font-size: x-large;" style="font-size:6mm">The Brazilian is set to ink fresh terms, which won't include a release clause, as he ignores interest from Barcelona and PSG to remain with the Reds
</p><br></br>
Liverpool are confident Philippe Coutinho will commit his long-term future to the club as he is close to agreeing a new deal that will put him in the top bracket of earners at Anfield.

<br></br>
<img src="news/hd-phil-coutinho_uvv451wm74hc1xwwbtm0i26qi.jpg" height="392" width="700">
Discussions over fresh terms, which will not include a release clause, have begun as the Reds look to tie down their standout star amid interest from Barcelona and Paris Saint-Germain. 



The 24-year-old, who has been named Liverpool’s Player of the Season two years running, will have his importance to their ambitions reflected in the proposal. 
<br></br>
Coutinho has elevated his game further under Jurgen Klopp and prior to picking up ankle ligament damage in November that kept him out of action for 46 days, was lighting up the Premier League.



He has contributed to 13 goals already in the campaign and will be crucial as the club look to combat a tough start to the year.
<br></br>
The Brazil international has often referenced his happiness on Merseyside as well as his belief in the direction the Reds are taking under the German. 

<br></br>
<img src="news/hd-jurgen-klopp-phil-coutinho_1bv0k0p5ageu91icz2pdkqf84l.jpg" height="392" width="700">

And Klopp stated in November that he expects Coutinho, who was last rewarded with a new deal in February 2015, to continue being an influential figure for the side.

"My opinion is that he feels really well here,” the manager said. 


“We all hope and think that his future is here at Liverpool. 

"It is creating the perspective that no-one wants to leave. That is all it is about.

"The players like to be here and it is our job to make sure it stays like this.”
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
    <a href="#" class="left">TERMS OF USE</a> <a href="#" class="left">PRIVACY POLICY</a>
    <p class="right">&copy; Sitename.com. Design by <a href="http://chocotemplates.com">ChocoTemplates.com</a></p>
    <div class="cl">&nbsp;</div>
  </div>
</body>
</html>
