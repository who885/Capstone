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

$articles = Music::getByID($conn, 4);
$lyrics = lyrics::getByID($conn, 13);
$translate = Translated::getByID($conn,1);
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
<a href="#" class="Trasnlate">Translate</a>
</div>

    <div class="mainimage">
    <img class="Main Image" src="https://i1.sndcdn.com/artworks-qjNvMyx7GyOx6IJB-Fy3w9g-t500x500.jpg" alt="" width="600px" height="500px">
</div>

    <div class="description">
    <b>Immortal</b>
    <p>Genre-hopping electronic duo Neffex amassed legions of followers by releasing a new song every week for 100 weeks. The material they issued as part of this challenge mixed EDM, rap, bass music, and other genres and resulted in several viral hits. Neffex built on the recognition brought to them from their prolifically released 100 songs in 2020 with proper debut album New Beginnings. Neffex is made up of vocalist/lyricist Bryce Savage and producer Cameron Wales. The two friends had played in a band together during high school, and reunited after completing college to form Neffex in 2014. Living in an apartment in Orange County, California, they developed a sound that merged elements of rap and electronic music. In 2017, they launched their 100 songs challenge, releasing a new single each week for 100 weeks. Among these songs were tracks like "Fight Back," "Rumors," "Best of Me," and several others that quickly became viral hits. Part of their rise to fame was their strategy of allowing their music to be used for free by content creators, which meant Neffex songs were soundtracking multiple videos from high-profile social media personalities. In addition to having their songs regularly collect millions of streams, Neffex accumulated millions of followers across several social media platforms.</p>
  </div>

  <div class="lyrics">
    <?php $str = $lyrics->lyrics; ?>
  <span>
  <a href="http://www.<?php echo $str ?>"><img src="https://i.scdn.co/image/ab6761610000e5eb3a7d849b89d6ba9f5bd81639" style = "display: block; width: 200px; margin-left: auto;
  margin-right: auto;"></a>
</span>
</div>



  </body>
</html>
