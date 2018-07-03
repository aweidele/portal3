<?php
require_once("inc/functions.php");
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Stuff</title>
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class="page_wrapper">
  <header>
    <div class="header_center">
      <h1>Stuff</h1>
      <div class="google_search">
        <form action="http://www.google.com/search" method="GET">
          <input type="text" value="" maxlength="255" size="31" name="q" placeholder="Search Google">
          <input type="submit" value="Search" name="btnG">
        </form>
      </div>
    </div>
    <div class="header_left">
      <div class="weather">
        <div class="current_conditions">
          <h2 class="current_temp"><i class="icon icon-weather_sunny"></i>94˚</h2>
          <p class="current_details">Humid throughout the day.</p>
        </div>
        <ul class="forcast">
          <li>
            <span class="day">S</span>
            <span class="icon"><i class="icon icon-weather_sunny"></i></span>
            <span class="temp">94˚</span>
          </li>
          <li>
            <span class="day">M</span>
            <span class="icon"><i class="icon icon-weather_sunny"></i></span>
            <span class="temp">94˚</span>
          </li>
          <li>
            <span class="day">T</span>
            <span class="icon"><i class="icon icon-weather_sunny"></i></span>
            <span class="temp">94˚</span>
          </li>
          <li>
            <span class="day">W</span>
            <span class="icon"><i class="icon icon-weather_sunny"></i></span>
            <span class="temp">94˚</span>
          </li>
          <li>
            <span class="day">T</span>
            <span class="icon"><i class="icon icon-weather_sunny"></i></span>
            <span class="temp">94˚</span>
          </li>
          <li>
            <span class="day">F</span>
            <span class="icon"><i class="icon icon-weather_sunny"></i></span>
            <span class="temp">94˚</span>
          </li>
          <li>
            <span class="day">S</span>
            <span class="icon"><i class="icon icon-weather_sunny"></i></span>
            <span class="temp">94˚</span>
          </li>
        </ul>
      </div>
    </div>
    <div class="header_right">
      <nav class="quicklinks">
        <ul>
          <li><a href="http://www.google.com" class="google"><i class="icon icon-google"></i><span>Google</span></a></li>
          <li><a href="http://mail.google.com" class="gmail"><i class="icon icon-mail"></i><span>GMail</span></a></li>
          <li><a href="http://www.facebook.com" class="facebook"><i class="icon icon-facebook"></i><span>Facebook</span></a></li>
          <li><a href="http://www.twitter.com" class="twitter"><i class="icon icon-twitter"></i><span>Twitter</span></a></li>
        </ul>
      </nav>
      <div class="calendar">
        <?php calendar(); ?>
      </div>
    </div>
  </header>
  <main>
    <section class="category most_clicked">
      <div class="category_inner">
        <h2>Most Clicked</h2>
        <ul>
          <li><a href="">ESPN - MLB Scoreboard</a></li>
          <li><a href="">Questionable Content</a></li>
          <li><a href="">Rotten Tomatoes</a></li>
          <li><a href="">Major League Baseball</a></li>
          <li><a href="">Forcast.IO</a></li>
          <li><a href="">YouTube</a></li>
          <li><a href="">Washington Post</a></li>
          <li><a href="">Web Designer Depot</a></li>
          <li><a href="">Smashing Magazine</a></li>
          <li><a href="">Six Revisions</a></li>
          <li><a href="">Noupe</a></li>
          <li><a href="">Camden Chat</a></li>
          <li><a href="">Internet Movie Database</a></li>
          <li><a href="">Nest</a></li>
          <li><a href="">A List Apart</a></li>
          <li><a href="">ESPN - NFL Scoreboard</a></li>
          <li><a href="">Bank of America</a></li>
          <li><a href="">CodePen</a></li>
          <li><a href="">Jira</a></li>
          <li><a href="">Icomoon (SVG to webfont)</a></li>
        </ul>
      </div>
    </section>
    <section class="category">
      <div class="category_inner">
        <h2>Most Clicked</h2>
        <ul>
          <li><a href="">Link Name</a></li>
          <li><a href="">Link Name</a></li>
          <li><a href="">Link Name</a></li>
          <li><a href="">Link Name</a></li>
          <li><a href="">Link Name</a></li>
          <li><a href="">Link Name</a></li>
        </ul>
      </div>
    </section>
  </main>
</div>
</body>
</html>
