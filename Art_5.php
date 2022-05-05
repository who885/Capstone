<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="/css/article.css">
    <?php
    require 'Classes/Music.php';
    require 'Classes/Lyrics.php';
    require 'Classes/Translated.php';
    require 'Classes/Dates.php';
    require 'Classes/Database.php';
    $conn = require  'includes/db.php';
//$conn needs to be in there, the number corresponds to the id number in the tables.

$articles = Music::getByID($conn, 3);
$lyrics = lyrics::getByID($conn, 8);
$translate = Translated::getByID($conn,5);
     ?>
    <meta charset="utf-8">
    <title>Media Music</title>
  </head>
  <body>
    <nav class="topnav">
    <ul>
      <li class="website_name">Media Music</li>
      <li><a href="index.php">Home</a></li>

    </ul>
    <div class="Shadow">
      <img class="head_img" src="https://www.magix.com/fileadmin/user_upload/SEO/Music/Organize-music/i_562531/organize-music-header-mobile-int.jpg" alt="">
      </div>
  </nav>

    <div class="row">

      <div class="column">
    <div class="article_1">
      <a href="<?php echo $articles->platform_1; ?>">  <img class="image" src="images/amazon_music.png" alt=""></a>
    </div></div>

    <div class="column">
    <div class="article_1">
      <a href="<?php echo $articles->platform_2; ?>">  <img class="image" src="images/pandora.jpg" alt=""></a>
    </div></div>

    <div class="column">
    <div class="article_1">
      <a href="<?php echo $articles->platform_3; ?>">  <img class="image" src="images/itunes.png" alt=""></a>
    </div></div>

  </div>
<div class="button">
<a href="Art_5_translated.php" class="Trasnlate">Translate</a>
</div>

    <div class="mainimage">
    <img class="Main Image" src="<?php echo $articles->thumb_link; ?>" alt="" >
</div>

    <div class="description">
    <b>I Break Mirrors With My Face in the United States</b>
    <p>Death Grips are a music collective based out of Sacramento California. They make avant garde electronic music, which usually includes the use of noise. 'I Break Mirrors With My Face' is such a great song, simply due to the amount of energy the lead singer, MC Ride, gives off. This is only accentuated by the gritty production provided by Zach Hill and Andy Morin.
 </p>
  </div>

  <div class="lyrics">
    <?php $str = $lyrics->lyrics; ?>
  <span>
    <a href="http://www.<?php echo $str ?>"><img src="images/genius.png" style = "display: block; width: 200px; margin-left: auto;
    margin-right: auto;"></a>
</span>
</div>



  </body>
</html>
