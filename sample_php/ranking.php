<?php
 session_start();
 
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>EPL Table</title>
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
            <div id="content" class="auto-style1" style="overflow: auto; height: 791px; left: 245px; max-height: none; position: absolute; top: 23px; border: thick #000000 double; color: #000000; font: icon; font-family: Calibri; font-size:normal;">
                      <table data-reactid="162" style="border-collapse: separate; border-spacing: 0px; font-weight: 300; width: 700px; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); height: 1149px;">
						  <thead data-reactid="163">
							  <tr data-reactid="164" style="margin: 0px 18px; font-size: 16px; color: rgb(255, 255, 255); background: rgb(238, 95, 72); font-weight: 400;">
								  <td colspan="10" data-reactid="165" style="padding: 15px 0px; border-right: 0px; font-size: 18px; text-align: center; background: rgb(255, 255, 255); color: rgb(51, 51, 51); font-weight: 600;">
								  Premier League Standings</td>
							  </tr>
						  </thead>
						  <tbody data-reactid="166" style="border-bottom: 1px solid rgb(233, 233, 233);">
							  <tr class="header" data-reactid="167" style="margin: 0px 18px; font-size: 18px; color: rgb(255, 255, 255); background: rgb(238, 95, 72); font-weight: 400;">
								  <td data-reactid="168" style="padding: 10px 15px; border: 0px;">
								  Pos</td>
								  <td data-reactid="169" style="padding: 10px 15px; border: 0px;">
								  Team</td>
								  <td data-reactid="170" style="padding: 10px 15px; border: 0px;">
								  P</td>
								  <td data-reactid="171" style="padding: 10px 15px; border: 0px;">
								  W</td>
								  <td data-reactid="172" style="padding: 10px 15px; border: 0px;">
								  D</td>
								  <td data-reactid="173" style="padding: 10px 15px; border: 0px;">
								  L</td>
								  <td data-reactid="174" style="padding: 10px 15px; border: 0px;">
								  GF</td>
								  <td data-reactid="175" style="padding: 10px 15px; border: 0px;">
								  GA</td>
								  <td data-reactid="176" style="padding: 10px 15px; border: 0px;">
								  GD</td>
								  <td data-reactid="177" style="padding: 10px 15px; border: 0px;">
								  Pts</td>
							  </tr>
							  <tr class="" data-reactid="178" style="margin: 0px 18px; font-size: 14px; color: rgb(51, 51, 51);">
								  <td data-reactid="179" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  1</td>
								  <td data-reactid="180" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  Chelsea</td>
								  <td data-reactid="181" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  19</td>
								  <td data-reactid="182" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  16</td>
								  <td data-reactid="183" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  1</td>
								  <td data-reactid="184" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  2</td>
								  <td data-reactid="185" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  42</td>
								  <td data-reactid="186" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  13</td>
								  <td data-reactid="187" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  +29</td>
								  <td data-reactid="188" style="padding: 15px; border-right: 0px;">
								  49</td>
							  </tr>
							  <tr class="" data-reactid="189" style="margin: 0px 18px; font-size: 14px; color: rgb(51, 51, 51); background: rgb(249, 249, 249);">
								  <td data-reactid="190" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  2</td>
								  <td data-reactid="191" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  Liverpool</td>
								  <td data-reactid="192" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  20</td>
								  <td data-reactid="193" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  13</td>
								  <td data-reactid="194" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  5</td>
								  <td data-reactid="195" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  2</td>
								  <td data-reactid="196" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  48</td>
								  <td data-reactid="197" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  23</td>
								  <td data-reactid="198" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  +25</td>
								  <td data-reactid="199" style="padding: 15px; border-right: 0px;">
								  44</td>
							  </tr>
							  <tr class="" data-reactid="200" style="margin: 0px 18px; font-size: 14px; color: rgb(51, 51, 51);">
								  <td data-reactid="201" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  3</td>
								  <td data-reactid="202" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  Manchester City</td>
								  <td data-reactid="203" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  20</td>
								  <td data-reactid="204" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  13</td>
								  <td data-reactid="205" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  3</td>
								  <td data-reactid="206" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  4</td>
								  <td data-reactid="207" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  41</td>
								  <td data-reactid="208" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  22</td>
								  <td data-reactid="209" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  +19</td>
								  <td data-reactid="210" style="padding: 15px; border-right: 0px;">
								  42</td>
							  </tr>
							  <tr class="" data-reactid="211" style="margin: 0px 18px; font-size: 14px; color: rgb(51, 51, 51); background: rgb(249, 249, 249);">
								  <td data-reactid="212" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  4</td>
								  <td data-reactid="213" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  Arsenal</td>
								  <td data-reactid="214" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  19</td>
								  <td data-reactid="215" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  12</td>
								  <td data-reactid="216" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  4</td>
								  <td data-reactid="217" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  3</td>
								  <td data-reactid="218" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  41</td>
								  <td data-reactid="219" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  19</td>
								  <td data-reactid="220" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  +22</td>
								  <td data-reactid="221" style="padding: 15px; border-right: 0px;">
								  40</td>
							  </tr>
							  <tr class="" data-reactid="222" style="margin: 0px 18px; font-size: 14px; color: rgb(51, 51, 51);">
								  <td data-reactid="223" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  5</td>
								  <td data-reactid="224" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  Tottenham Hotspur</td>
								  <td data-reactid="225" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  19</td>
								  <td data-reactid="226" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  11</td>
								  <td data-reactid="227" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  6</td>
								  <td data-reactid="228" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  2</td>
								  <td data-reactid="229" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  37</td>
								  <td data-reactid="230" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  14</td>
								  <td data-reactid="231" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  +23</td>
								  <td data-reactid="232" style="padding: 15px; border-right: 0px;">
								  39</td>
							  </tr>
							  <tr class="" data-reactid="233" style="margin: 0px 18px; font-size: 14px; color: rgb(51, 51, 51); background: rgb(249, 249, 249);">
								  <td data-reactid="234" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  6</td>
								  <td data-reactid="235" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  Manchester United</td>
								  <td data-reactid="236" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  20</td>
								  <td data-reactid="237" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  11</td>
								  <td data-reactid="238" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  6</td>
								  <td data-reactid="239" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  3</td>
								  <td data-reactid="240" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  31</td>
								  <td data-reactid="241" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  19</td>
								  <td data-reactid="242" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  +12</td>
								  <td data-reactid="243" style="padding: 15px; border-right: 0px;">
								  39</td>
							  </tr>
							  <tr class="" data-reactid="244" style="margin: 0px 18px; font-size: 14px; color: rgb(51, 51, 51);">
								  <td data-reactid="245" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  7</td>
								  <td data-reactid="246" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  Everton</td>
								  <td data-reactid="247" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  20</td>
								  <td data-reactid="248" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  8</td>
								  <td data-reactid="249" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  6</td>
								  <td data-reactid="250" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  6</td>
								  <td data-reactid="251" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  28</td>
								  <td data-reactid="252" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  23</td>
								  <td data-reactid="253" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  +5</td>
								  <td data-reactid="254" style="padding: 15px; border-right: 0px;">
								  30</td>
							  </tr>
							  <tr class="" data-reactid="255" style="margin: 0px 18px; font-size: 14px; color: rgb(51, 51, 51); background: rgb(249, 249, 249);">
								  <td data-reactid="256" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  8</td>
								  <td data-reactid="257" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  West Bromwich Albion</td>
								  <td data-reactid="258" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  20</td>
								  <td data-reactid="259" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  8</td>
								  <td data-reactid="260" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  5</td>
								  <td data-reactid="261" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  7</td>
								  <td data-reactid="262" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  28</td>
								  <td data-reactid="263" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  24</td>
								  <td data-reactid="264" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  +4</td>
								  <td data-reactid="265" style="padding: 15px; border-right: 0px;">
								  29</td>
							  </tr>
							  <tr class="" data-reactid="266" style="margin: 0px 18px; font-size: 14px; color: rgb(51, 51, 51);">
								  <td data-reactid="267" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  9</td>
								  <td data-reactid="268" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  Bournemouth</td>
								  <td data-reactid="269" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  19</td>
								  <td data-reactid="270" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  7</td>
								  <td data-reactid="271" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  3</td>
								  <td data-reactid="272" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  9</td>
								  <td data-reactid="273" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  26</td>
								  <td data-reactid="274" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  31</td>
								  <td data-reactid="275" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  -5</td>
								  <td data-reactid="276" style="padding: 15px; border-right: 0px;">
								  24</td>
							  </tr>
							  <tr class="" data-reactid="277" style="margin: 0px 18px; font-size: 14px; color: rgb(51, 51, 51); background: rgb(249, 249, 249);">
								  <td data-reactid="278" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  10</td>
								  <td data-reactid="279" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  Southampton</td>
								  <td data-reactid="280" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  20</td>
								  <td data-reactid="281" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  6</td>
								  <td data-reactid="282" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  6</td>
								  <td data-reactid="283" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  8</td>
								  <td data-reactid="284" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  19</td>
								  <td data-reactid="285" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  25</td>
								  <td data-reactid="286" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  -6</td>
								  <td data-reactid="287" style="padding: 15px; border-right: 0px;">
								  24</td>
							  </tr>
							  <tr class="" data-reactid="288" style="margin: 0px 18px; font-size: 14px; color: rgb(51, 51, 51);">
								  <td data-reactid="289" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  11</td>
								  <td data-reactid="290" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  Burnley</td>
								  <td data-reactid="291" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  20</td>
								  <td data-reactid="292" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  7</td>
								  <td data-reactid="293" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  2</td>
								  <td data-reactid="294" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  11</td>
								  <td data-reactid="295" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  22</td>
								  <td data-reactid="296" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  31</td>
								  <td data-reactid="297" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  -9</td>
								  <td data-reactid="298" style="padding: 15px; border-right: 0px;">
								  23</td>
							  </tr>
							  <tr class="" data-reactid="299" style="margin: 0px 18px; font-size: 14px; color: rgb(51, 51, 51); background: rgb(249, 249, 249);">
								  <td data-reactid="300" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  12</td>
								  <td data-reactid="301" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  Watford</td>
								  <td data-reactid="302" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  19</td>
								  <td data-reactid="303" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  6</td>
								  <td data-reactid="304" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  4</td>
								  <td data-reactid="305" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  9</td>
								  <td data-reactid="306" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  23</td>
								  <td data-reactid="307" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  34</td>
								  <td data-reactid="308" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  -11</td>
								  <td data-reactid="309" style="padding: 15px; border-right: 0px;">
								  22</td>
							  </tr>
							  <tr class="" data-reactid="310" style="margin: 0px 18px; font-size: 14px; color: rgb(51, 51, 51);">
								  <td data-reactid="311" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  13</td>
								  <td data-reactid="312" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  West Ham United</td>
								  <td data-reactid="313" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  20</td>
								  <td data-reactid="314" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  6</td>
								  <td data-reactid="315" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  4</td>
								  <td data-reactid="316" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  10</td>
								  <td data-reactid="317" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  23</td>
								  <td data-reactid="318" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  35</td>
								  <td data-reactid="319" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  -12</td>
								  <td data-reactid="320" style="padding: 15px; border-right: 0px;">
								  22</td>
							  </tr>
							  <tr class="" data-reactid="321" style="margin: 0px 18px; font-size: 14px; color: rgb(51, 51, 51); background: rgb(249, 249, 249);">
								  <td data-reactid="322" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  14</td>
								  <td data-reactid="323" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  Leicester City</td>
								  <td data-reactid="324" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  20</td>
								  <td data-reactid="325" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  5</td>
								  <td data-reactid="326" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  6</td>
								  <td data-reactid="327" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  9</td>
								  <td data-reactid="328" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  24</td>
								  <td data-reactid="329" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  31</td>
								  <td data-reactid="330" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  -7</td>
								  <td data-reactid="331" style="padding: 15px; border-right: 0px;">
								  21</td>
							  </tr>
							  <tr class="" data-reactid="332" style="margin: 0px 18px; font-size: 14px; color: rgb(51, 51, 51);">
								  <td data-reactid="333" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  15</td>
								  <td data-reactid="334" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  Stoke City</td>
								  <td data-reactid="335" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  19</td>
								  <td data-reactid="336" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  5</td>
								  <td data-reactid="337" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  6</td>
								  <td data-reactid="338" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  8</td>
								  <td data-reactid="339" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  22</td>
								  <td data-reactid="340" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  32</td>
								  <td data-reactid="341" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  -10</td>
								  <td data-reactid="342" style="padding: 15px; border-right: 0px;">
								  21</td>
							  </tr>
							  <tr class="" data-reactid="343" style="margin: 0px 18px; font-size: 14px; color: rgb(51, 51, 51); background: rgb(249, 249, 249);">
								  <td data-reactid="344" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  16</td>
								  <td data-reactid="345" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  Middlesbrough</td>
								  <td data-reactid="346" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  20</td>
								  <td data-reactid="347" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  4</td>
								  <td data-reactid="348" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  7</td>
								  <td data-reactid="349" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  9</td>
								  <td data-reactid="350" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  17</td>
								  <td data-reactid="351" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  22</td>
								  <td data-reactid="352" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  -5</td>
								  <td data-reactid="353" style="padding: 15px; border-right: 0px;">
								  19</td>
							  </tr>
							  <tr class="" data-reactid="354" style="margin: 0px 18px; font-size: 14px; color: rgb(51, 51, 51);">
								  <td data-reactid="355" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  17</td>
								  <td data-reactid="356" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  Crystal Palace</td>
								  <td data-reactid="357" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  19</td>
								  <td data-reactid="358" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  4</td>
								  <td data-reactid="359" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  4</td>
								  <td data-reactid="360" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  11</td>
								  <td data-reactid="361" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  29</td>
								  <td data-reactid="362" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  35</td>
								  <td data-reactid="363" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  -6</td>
								  <td data-reactid="364" style="padding: 15px; border-right: 0px;">
								  16</td>
							  </tr>
							  <tr class="" data-reactid="365" style="margin: 0px 18px; font-size: 14px; color: rgb(51, 51, 51); background: rgb(249, 249, 249);">
								  <td data-reactid="366" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  18</td>
								  <td data-reactid="367" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  Sunderland</td>
								  <td data-reactid="368" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  20</td>
								  <td data-reactid="369" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  4</td>
								  <td data-reactid="370" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  3</td>
								  <td data-reactid="371" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  13</td>
								  <td data-reactid="372" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  19</td>
								  <td data-reactid="373" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  37</td>
								  <td data-reactid="374" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  -18</td>
								  <td data-reactid="375" style="padding: 15px; border-right: 0px;">
								  15</td>
							  </tr>
							  <tr class="" data-reactid="376" style="margin: 0px 18px; font-size: 14px; color: rgb(51, 51, 51);">
								  <td data-reactid="377" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  19</td>
								  <td data-reactid="378" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  Hull City</td>
								  <td data-reactid="379" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  20</td>
								  <td data-reactid="380" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  3</td>
								  <td data-reactid="381" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  4</td>
								  <td data-reactid="382" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  13</td>
								  <td data-reactid="383" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  17</td>
								  <td data-reactid="384" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  44</td>
								  <td data-reactid="385" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  -27</td>
								  <td data-reactid="386" style="padding: 15px; border-right: 0px;">
								  13</td>
							  </tr>
							  <tr class="" data-reactid="387" style="margin: 0px 18px; font-size: 14px; color: rgb(51, 51, 51); background: rgb(249, 249, 249);">
								  <td data-reactid="388" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  20</td>
								  <td data-reactid="389" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  Swansea City</td>
								  <td data-reactid="390" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  19</td>
								  <td data-reactid="391" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  3</td>
								  <td data-reactid="392" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  3</td>
								  <td data-reactid="393" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  13</td>
								  <td data-reactid="394" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  21</td>
								  <td data-reactid="395" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  44</td>
								  <td data-reactid="396" style="padding: 15px; border-right: 1px solid rgb(233, 233, 233);">
								  -23</td>
								  <td data-reactid="397" style="padding: 15px; border-right: 0px;">
								  12</td>
							  </tr>
					  </table>
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
