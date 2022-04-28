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



    <div class="row">

    <div class="column">
    <div class="article_1">
      <a href="#">  <img class="" src="images/amazon_music.png" alt=""></a>
    </div></div>


    <div class="column">


    <div class="article_2">
      <a href="#">  <img class="" src="images/pandora.jpg" alt=""></a>
    </div>
    </div>

    <div class="column">


    <div class="article_2">
      <a href="#">  <img class="" src="images/pandora.jpg" alt=""></a>
    </div>
    </div>

    </div>


  </body>
</html>
