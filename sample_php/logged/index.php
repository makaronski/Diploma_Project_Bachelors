<?php
 session_start();
 
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LFC Fan Home</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
</head>
<body>
<!-- Header -->
<div id="header">
  <div class="shell">
    <!-- Logo -->
    <h1 id="logo" class="notext"><a href="#">Sport Zone Sport Portal</a></h1>
    
    <!-- End Logo -->
  </div>
</div>
<!-- End Header -->
<!-- Navigation -->
<div id="navigation">
  <div class="shell">
    <div class="cl">&nbsp;</div>
    <ul>
      <li><a href="newspg.php">news &amp; events</a></li>
      <li><a href="analysis.php">analysis</a></li>
      <li><a href="gallery.php">photo gallery</a></li>
      <li><a href="#">community</a></li>
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
<div id="heading">
  <div class="shell">
    <div id="heading-cnt">
      <!-- Sub nav -->
      <div id="side-nav">
        <ul>
          <li class="active">
            <div class="link"><a href="index.php">home</a></div>
          </li>
          <li>
            <div class="link"><a href="ranking.php">ranking</a></div>
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
      <div id="heading-box">
        <div id="heading-box-cnt">
          <div class="cl">&nbsp;</div>
          <!-- Main Slide Item -->
          <div class="featured-main"> <a href="coutinho.php"><img src="css/images/featured-main.jpg" alt="" /></a>
            <div class="featured-main-details">
              <div class="featured-main-details-cnt">
                <h4><a href="coutinho.php">Coutinho to get new Liverpool deal</a></h4>
                <p>The Brazilian is set to ink fresh terms, which won't include a release clause, as he ignores interest from Barcelona and PSG to remain with the Reds</p>
              </div>
            </div>
          </div>
          <!-- End Main Slide Item -->
          <div class="featured-side">
            <!-- Slide Item 1 -->
            <div class="featured-side-item">
              <div class="cl">&nbsp;</div>
              <a href="nicol.php" class="left"><img src="css/images/featured-side-1.jpg" alt="" /></a>
              <h4><a href="nicol.php">Nicol: Defence will cost Liverpool title</a></h4>
              <p>Liverpool can't challenge for the title with their defence, warns Nicol</p>
              <div class="cl">&nbsp;</div>
            </div>
            <!-- End Slide Item 1 -->
            <!-- Slide Item 2 -->
            <div class="featured-side-item">
              <div class="cl">&nbsp;</div>
              <a href="gerrard.php" class="left"><img src="css/images/featured-side-2.jpg" alt="" /></a>
              <h4><a href="gerrard.php">Klopp backs Gerrard the manager</a></h4>
              <p>The German believes the club's former captain has a "bright future"</p>
              <div class="cl">&nbsp;</div>
            </div>
            <!-- End Slide Item 2 -->
            <!-- Slide Item 3 -->
            <div class="featured-side-item">
              <div class="cl">&nbsp;</div>
              <a href="titledr.php" class="left"><img src="css/images/featured-side-3.jpg" alt="" /></a>
              <h4><a href="titledr.php">Liverpool's title dreams turning into dust</a></h4>
              <p>The Reds are yet to win a Premier League game in the new year</p>
              <div class="cl">&nbsp;</div>
            </div>
            <!-- End Slide Item 3 -->
            <!-- Slide Item 4 -->
            <div class="featured-side-item">
              <div class="cl">&nbsp;</div>
              <a href="virgil.php" class="left"><img src="css/images/featured-side-4.jpg" alt="" /></a>
              <h4><a href="virgil.php">Gerrard: Liverpool need Van Dijk</a></h4>
              <p>The Anfield legend believes the Dutch defender would be an ideal addition for Jurgen Klopp</p>
              <div class="cl">&nbsp;</div>
            </div>
            <!-- End Slide Item 4 -->
          </div>
          <div class="cl">&nbsp;</div>
        </div>
      </div>
      <!-- End Widget -->
    </div>
  </div>
</div>
<!-- End Heading -->
<!-- Main -->
<div id="main">
  <div class="shell">
    <div class="cl">&nbsp;</div>
    <div id="sidebar">
      <h2>news spot</h2>
      <ul>
        <li> <small class="date">12.05.09</small>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </li>
        <li> <small class="date">12.05.09</small>
          <p>Donec venenatis varius urna vitae congue.</p>
        </li>
        <li> <small class="date">12.05.09</small>
          <p>Ullam vel neque ut lectus cursus dapibus.</p>
        </li>
        <li> <small class="date">12.05.09</small>
          <p>Praesent pellentesque arcu convallis ante dignissim quis ultrices felis iaculis.</p>
        </li>
        <li> <small class="date">12.05.09</small>
          <p>Ut eget lorem elit. Donec lorem eros, congue vel mollis non, tincidunt a nisl.</p>
        </li>
        <li> <small class="date">12.05.09</small>
          <p>Curabitur consectetur tellus a diam tincidunt pellentesque. </p>
        </li>
      </ul>
      <a href="#" class="archives">News Archives</a> </div>
    <div id="content">
      <div class="cl">&nbsp;</div>
      <div class="grey-box">
        <h3><a href="top6.php">A STATISTICAL LOOK AT THE PREMIER LEAGUE TOP SIX</a></h3>
        <a href="top6.php"><img src="css/images/main-1.png" alt="" /></a>
        <p> <span>Nearly a third of a way into the Premier League season</span> <a href="analysis.php" class="button">Read more</a> </p>
      </div>
      <div class="grey-box">
        <h3><a href="kvm.php">KARIUS VS. MIGNOLET-WHAT DO THE NUMBERS SAY?</a></h3>
        <a href="kvm.php"><img src="css/images/main-2.png" alt="" /></a>
        <p> <span>WHAT DO THE NUMBERS SAY?</span> <a href="analysis.php" class="button">Read more</a> </p>
      </div>
      <div class="grey-box last">
        <h3><a href="fff.php">Fitness, form and fluidity are Liverpool’s big concerns</a></h3>
        <a href="fff.php"><img src="css/images/main-3.jpg" alt="" /></a>
        <p> <span>Key players are not at full sharpness</span> <a href="analysis.php" class="button">Read more</a> </p>
      </div>
      <div class="cl">&nbsp;</div>
      <div class="video-box">
        <div class="cl">&nbsp;</div>
        <h2 class="left">video spot</h2>
        <a href="fanz.php" class="button">All videos</a>
        <div class="cl">&nbsp;</div>
        <div class="video-item-box"> <a href="https://www.youtube.com/watch?v=9KumlS-Cjjw" class="left" target="_blank"><img src="css/images/video-1.jpg" alt="" /></a>
          <p>Liverpool FC 4-3 Borussia Dortmund - Game of the decade - Highlights & Goals</p>
          <a href="https://www.youtube.com/watch?v=9KumlS-Cjjw" class="watch-now" target="_blank">Watch now</a> </div>
        <div class="video-item-box second"> <a href="https://www.youtube.com/watch?v=A4ZBddLObek" class="left" target="_blank"><img src="css/images/video-2.jpg" alt="" /></a>
          <p>Coutinho Firmino Mane ● Magic Trio Skills & Goals 2017 | HD</p>
          <a href="https://www.youtube.com/watch?v=A4ZBddLObek" class="watch-now" target="_blank">Watch now</a> </div>
        <div class="video-item-box"> <a href="https://www.youtube.com/watch?v=tnB4XAhl6PY" class="left" target="_blank"><img src="css/images/video-3.jpg" alt="" /></a>
          <p>FC Liverpool vs. AC Milan ~Istanbul 2005~ Evening of Dreams</p>
          <a href="https://www.youtube.com/watch?v=tnB4XAhl6PY" class="watch-now" target="_blank">Watch now</a> </div>
        <div class="video-item-box second"> <a href="https://www.youtube.com/watch?v=XD_en30RkWU" class="left" target="_blank"><img src="css/images/video-4.jpg" alt="" /></a>
          <p>Liverpool FC 2016/17 - We Are On Fire</p>
          <a href="https://www.youtube.com/watch?v=XD_en30RkWU" class="watch-now" target="_blank">Watch now</a> </div>
        <div class="cl">&nbsp;</div>
      </div>
    </div>
    <div class="cl">&nbsp;</div>
  </div>
</div>
<!-- End Main -->
<!-- Footer -->
<div id="footer">
  <div class="shell">
    <div class="cl">&nbsp;</div>
    &nbsp;
    <p class="right">&copy; liverpoolfansite.bg Design by Petar Petrov
</p>
    <div class="cl">&nbsp;</div>
  </div>
</div>
<!-- End Footer -->
</body>
</html>
