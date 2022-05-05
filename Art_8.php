<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" href="/css/article.css">
    <?php
    require 'Classes\Music.php';
    require 'Classes\Lyrics.php';
    require 'Classes\Translated.php';
    require 'Classes\Dates.php';
    require 'Classes\Database.php';
    $conn = require  'includes\db.php';
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
    <img class="Main Image" src="<?php echo $articles->thumb_link; ?>" alt="">
</div>

    <div class="description">
    <b>Title</b>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis mauris ut ligula mollis ornare. Mauris ut nisi suscipit, ultrices mi at, ultricies risus. Aliquam hendrerit dui ac tellus aliquam, sed vestibulum quam lobortis. Donec et arcu in eros rhoncus rhoncus sed sit amet risus. Suspendisse placerat nisi a lorem tempor sodales. In eu est molestie quam mattis scelerisque. Suspendisse dolor eros, elementum eu ante sed, tincidunt imperdiet nibh. Nulla et est interdum lectus euismod efficitur. Suspendisse molestie justo ut ante efficitur, quis facilisis nibh euismod. Proin urna ligula, blandit in gravida ut, placerat vel purus. Duis in libero viverra, dictum nulla non, fermentum turpis. Etiam auctor viverra dignissim.

Curabitur hendrerit mattis mauris. Quisque sollicitudin lacinia enim sed pellentesque. Vivamus varius nulla id ante hendrerit, aliquet accumsan purus viverra. Aliquam eu accumsan urna, lacinia feugiat est. Quisque non nisl vitae purus ultrices consectetur ac eu turpis. Donec feugiat sollicitudin purus non tincidunt. Aliquam erat volutpat. Suspendisse ultricies porta maximus. Fusce aliquet, lorem vitae lacinia sagittis, elit lacus placerat turpis, vel accumsan nisi arcu sed nisl. Donec dignissim tristique eros, et ultrices lorem accumsan eget. Curabitur imperdiet accumsan fermentum. </p>
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
