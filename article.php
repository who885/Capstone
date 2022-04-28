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
$lyrics = lyrics::getByID($conn, 16);
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
      <a href="#">  <img class="image" src="images/amazon_music.png" alt=""></a>
    </div></div>


    <div class="column">
    <div class="article_2">
      <a href="#">  <img class="image" src="images/pandora.jpg" alt=""></a>
    </div></div>


    <div class="column">
    <div class="article_2">
      <a href="#">  <img class="image" src="images/itunes.png" alt=""></a>
    </div></div>

  </div>

    <div class="mainimage">
    <img class="Main Image" src="<?php echo $articles->thumb_link; ?>" alt="">
</div>

    <div class="description">
    <b>Title</b>
    <p>"Ut sodales, sapien non sagittis rutrum, lorem ante placerat est, id porttitor enim diam at dui. Cras laoreet dapibus dolor a auctor. Morbi sollicitudin, nisl nec fermentum condimentum, odio ex rutrum arcu, quis dapibus mi massa ut lacus. Suspendisse a scelerisque leo. Suspendisse vel eros sed dolor volutpat bibendum. Quisque blandit gravida libero, eu tincidunt massa cursus non. Donec euismod, dui in facilisis fringilla, velit felis consequat enim, ut fringilla nunc turpis vitae nibh. Nam tristique justo pellentesque vehicula fringilla. Mauris sed consequat ligula. Quisque dui erat, laoreet ac lobortis non, finibus vel purus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis volutpat eros a purus venenatis, sit amet egestas quam lobortis. Donec viverra scelerisque augue a dictum. Nunc volutpat ultrices nisi non tristique." </p>
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
