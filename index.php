<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="/css/style.css">
    <?php
    require 'Classes\Music.php';
    require 'Classes\Lyrics.php';
    require 'Classes\Translated.php';
    require 'Classes\Dates.php';
    require 'Classes\Database.php';
    $conn = require  'includes\db.php';
    $articles = Music::getByID($conn, 1);
    $lyrics = Lyrics::getByID($conn, 1);
    $dates = Dates::getByID($conn, 1);
    $translated = Translated::getByID($conn, 1);


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
    </nav>


    <img src="<?php echo $articles->thumb_link; ?>" alt="">


  </body>
</html>
