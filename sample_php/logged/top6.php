<?php
 session_start();
 
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Statistics behind top 6</title>
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
           Nearly a third of a way into the Premier League season, the fight at the top of the Premier League is incredibly tight.  The top five teams are separated by a mere four points.  It’s early, but, the way the league is setting up, this looks like it could be one of the most exciting recent Premier League title races.  We’ll break down how the title race is looking after 12 matches.
<p>
Those top five so far are Chelsea, Liverpool, Manchester City, Arsenal, and Tottenham.  The notable exception from that top five is Manchester United, who were expected to be challenging for the title.  Jose Mourinho says his team has been the unluckiest team in the league so far this season.  Looking at the underlying numbers, Mourinho may have a point, so we’re going to throw them into this discussion and make this a top six.
</p>
<br></br>
SHOTS FOR<br></br>

<img src="news/Shots-for-1.png">
<br></br>


Looking at shots, Liverpool lead the league in shots for by nearly an entire shot and a half with 19.4 shots per game.  Following them are Tottenham, Manchester City, Manchester United and Chelsea who all take between 17.5 and 16 shots per game.  The odd team out so far has been Arsenal who are in seventh in shots with a mere 14.5 shots per game.  That’s a notable concern for Gunners fans, but shots alone is hardly a perfect metric and there are other things to look at.
<br></br>
<img src="news/Shots-OT.png">
<br></br>



Looking at shots on target, the order changes a bit, but the two main conclusions can still be draw; Liverpool have been the best shooting team in the league and Arsenal should be worried about their offense.  Liverpool have more than a shot on target more per game than anyone else in the league with 1.3 shots on target more than the second best team, Chelsea.  Arsenal find themselves detached from the pack again with their 4.6 shots on target per game eight in the league and 1.1 shots on target behind the rest of that top six.
<br></br>
SHOTS AGAINST
<br></br>
<img src="news/Shots-against-1.png">
<br></br>


Taking shots and scoring goals are obviously not the only important thing for a team, you also need to keep other teams from taking shots and scoring goals.  Narrative, as well as goals conceded, would say Liverpool would be the worst of the top six.  Yet, they have been the best team in the league in terms of stopping shots so far this season.  Their 7.5 shots conceded this season is the best in the league, with Manchester City second by a whole shot per game.  Arsenal find themselves back in the pack when it comes to shots conceded, but aren’t outstandingly good to make up for their lack of shots for, which is again concerning for Arsene Wenger.
<br></br>
EXPECTED GOALS
<br></br>
<img src="news/Cx0ypdhWIAAAIZT.jpg">
<br></br>

A better metric than shots, which is a metric focused on quantity, is expected goals, a metric that measures quality.  Expected goals is a metric that measures the chance every shot has of turning into a goal based on past shots taken (for more on that read here). 
<br></br>

As said above, expected goals is a metric more about quality than quantity.  So the numbers could be different from the quantity based ones.  The two columns are expected goal difference and adjusted expected goal difference.  The adjustment is just and adjustment based on how difficult a teams schedule has been so far.  Note that the expected goals numbers are from after match week 12.
<p>
After 12 matches, Chelsea were top of expected goal difference and adjusted expected goal difference with a 14.6 adjusted expected goal difference.  Liverpool’s expected goal difference was worse than Manchester City’s, but since their schedule has been so tough, their adjusted expected goal difference moved them up to second and very close to Chelsea.  Manchester City’s adjusted expected goal difference was about a goal behind the other two, but nothing too significant.

Then there was a pretty significant drop off.  After Manchester City’s 13.0 adjusted expected goal difference, Manchester United’s was 9.4, three and a half goals fewer.  Arsenal are behind United with Tottenham following behind in sixth, but they were all grouped pretty close together.  The expected goal difference paints a picture that this hasn’t been a top six, but a top three and a second three.
</p>
This also questions the thought that Manchester United have been significantly worse than the rest of the top five and supports Mourinho’s claim that Manchester United have been unlucky.  The table has them four points off fifth place and suggests they’ve been worse than the rest of the top five.  The numbers, both expected goals and shots, suggest their performances have been close to as good as the rest of the top six.
<br></br>
Looking at the numbers, Chelsea, Manchester City, and Liverpool are in the top three in shots on target for, shots against, expected goal difference, and the actual league table.  The numbers suggest that the league table maybe doesn’t is that there haven’t been five teams performing at roughly equal levels with Manchester United lacking behind, there have been three teams (Liverpool, Chelsea, and Manchester City) performing better than anyone else in the league and then three other teams (Manchester United, Arsenal, and Tottenham) playing at a high level, but slightly below those top three.

Teams performance levels can fluctuate, but the way the season has gone, Chelsea, Liverpool, and Manchester City should feel very good about their title chances.  Arsenal and Tottenham should feel they need to improve if they are to be serious title contenders this season, especially Arsenal, who have benefited from quite a bit of luck this season as shown be the fact that after 12 matches their actual goal difference (+13) was five goals higher than their expected goal difference (+8).  Finally, Manchester United, while well off the pace for a title challenge, can feel that their performances have been better than their results have reflected.           </div>
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
