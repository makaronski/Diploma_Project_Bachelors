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
            <p style="font-style:oblique; font-size: x-large;" style="font-size:6mm">The former Reds midfielder says no team will take the Premier League crown "shipping goals" like Jurgen Klopp's side have been doing this season
            </p>
            <p><br></br> </p>
               <p>Liverpool legend Steve Nicol has warned the Anfield class of 2016-17 that “a team doesn’t win the Premier League shipping goals in the way they do”.

<p>The Reds have been a free-scoring outfit this season, with no side in the English top-flight able to better their return of 51 efforts in 22 fixtures.
</p>


Leaks have been sprung at the back on an alarmingly frequent basis, though, with Manchester City (28) the only side in the top six to have been breached on more occasions that Jurgen Klopp’s team (27).
<br></br>
<img src="../sport-zone/news/hd-liverpool_1dy970wdznrpb16qf3a83zbx1d.jpg" alt="desperation" height="392" width="700">
<p>Worryingly for Liverpool, their inability to keep the back door bolted has been exposed all too regularly by sides that they would be expected to contain.
<p>
Since the start of December, Bournemouth have hit four past the Reds, while Sunderland managed two and Swansea City three.

Nicol believes a lack of clean sheets will end up costing Klopp’s side dear, with it difficult to see how they can force their way back into the title picture.
</p>
<br></br>


He told ESPN FC: "I don't see Liverpool winning the Premier League title with the defence they have.

"They don't look as if they are going to bring anyone in this window, which means they've got what they've got.


"When they let in the goals that they have done - not just at Swansea, against Burnley - [they are] perfect examples that it's not happening.

"Bournemouth - four goals at Bournemouth. A team doesn't win the Premier League shipping goals in the way they do."
<br></br>
<img src="../sport-zone/news/hd-jurgen-klopp_nz5ihhrtp2ez11tjj4pi1wyty.jpg" height="392" width="700">
<p>
Klopp has admitted that he is not looking to bolster his ranks at the back during the January transfer window, with the German of the opinion that Liverpool need to get things right as a collective, rather than point the finger of blame at one area of the team.
</p>
He said: “You always speak about defence, or players. I speak about the whole defence of the team. If it was to buy one player and fix it, I'd be silly not to do it but it's not that simple.”</p>
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
    <p class="right">&copy; liverpoolfansite.bg Design by Petar Petrov
    <div class="cl">&nbsp;</div>
  </div>
</body>
</html>
