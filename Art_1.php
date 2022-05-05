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
$lyrics = lyrics::getByID($conn, 10);
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
    <img class="Main Image" src="https://electroswingthing.com/wp-content/uploads/2020/01/Swingrowers-2020_500px.jpg" alt="" >
</div>

    <div class="description">
    <b>Butterfly</b>
    <p>Swingrowers are an accomplished four-piece band from Palermo in Sicily off the southern coast of Italy. Blending jazz to hip-hop, electronica to gypsy swing their sound has been steadily evolving since their debut into a unique vintage-inspired pop.With three albums out, more than 20M views on youtube, a steady string of catchy singles and a powerful live show, the band is one of the most long lived and sought after in the electro-swing and retro scene. They are signed to Freshly Squeezed – a Brighton (UK) based independent record label and music publisher. After touring North America, Canada, Asia, Europe and Japan (including two sold out headline shows at Blue Note Tokyo) with the likes of Caravan Palace and Parov Stelar, the band is continuing to travel all around the world with their 3rd studio album”OUTSIDEIN”.
 </p>
  </div>

  <div class="lyrics">
    <?php $str = $lyrics->lyrics; ?>
  <span>
  <a href="http://www.<?php echo $str ?>"><img src="https://i.natgeofe.com/k/9acd2bad-fb0e-43a8-935d-ec0aefc60c2f/monarch-butterfly-grass_4x3.jpg" style = "display: block; width: 200px; margin-left: auto;
  margin-right: auto;"></a>
</span>
</div>



  </body>
</html>
