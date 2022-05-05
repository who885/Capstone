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
$lyrics = lyrics::getByID($conn, 9);
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
    <img class="Main Image" src="https://i1.sndcdn.com/artworks-1OHOA4uZkbc36Prf-ht3dkw-t500x500.jpg" alt="">
</div>

    <div class="description">
    <b>Title</b>
    <p>Michael Joseph Jackson was an American singer, songwriter, and dancer. Dubbed the "King of Pop", he is regarded as one of the most significant cultural figures of the 20th century.After the release of Bad in August of 1987, “Smooth Criminal” was the album’s seventh single, released on November 14, 1988. It peaked at No. 7 on the Billboard Hot 100 and No. 2 on the Billboard Hot Black Singles chart but never reached No. 1 on either. It did, however, reach No. 1 in Belgium, Iceland, the Netherlands, and Spain. Swingrowers are an accomplished four-piece band from Palermo, Sicily. They are Loredana Grimaudo (singer, songwriter), Roberto Costa aka Pisk (DJ, producer) , Alessio Costagliola (guitarist) , Ciro Pusateri (saxophonist). From Jazz to hip-hop, electronica to gypsy swing their sound has been steadily evolving since their debut into a unique vintage-inspired pop. They are noted for their irreverent style, which blends the freshness of dance music, with the warm influences of swing from the 20s and 30s. </p>
  </div>

  <div class="lyrics">
    <?php $str = $lyrics->lyrics; ?>
  <span>
  <a href="http://www.<?php echo $str ?>"><img src="https://i.pinimg.com/originals/72/a8/fc/72a8fcb08556a100c1be17a02082ae0b.jpg" style = "display: block; width: 200px; margin-left: auto;
  margin-right: auto;"></a>
</span>
</div>



  </body>
</html>
