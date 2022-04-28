<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/article.css">
    <?php
    require 'Classes\Music.php';
    require 'Classes\Lyrics.php';
    require 'Classes\Translated.php';
    require 'Classes\Dates.php';
    require 'Classes\Database.php';
    $conn = require  'includes\db.php';

$articles = Music::getByID($conn, 1);
     ?>
    <meta charset="utf-8">
    <title>Website title</title>
  </head>
  <body>
    <nav class="topnav">
      <ul>
        <li>Website Name</li>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Page2</a></li>
        <li><a href="#">Page3</a></li>
      </ul>
      <div class="Shadow">
        <img class="head_img" src="<?php echo $articles->thumb_link; ?>" alt="">
        </div>
    </nav>


<div class="flexbox_container">
  <div class="flexbox-item flexbox-item-1">
      <a href="#"><h1>Lyrics</h1></a>
  </div>
  <div class="flexbox-item flexbox-item-2">
      <a href="<?php echo $articles->platform_2; ?>"><img class="image" src="images/itunes.png" alt="itunes"></a>
  </div>
  <div class="flexbox-item flexbox-item-2">
    <a href="<?php echo $articles->platform_1; ?>"><img class="image" src="images/amazon_music.png" alt="amazon music"></a>
  </div>
  <div class="flexbox-item flexbox-item-2">
    <a href="<?php echo "#"; ?>"><img class="image" src="images/pandora.jpg" alt="Pandora"></a>
</div>





  </body>
</html>
