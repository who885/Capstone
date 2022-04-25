<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="/css/style.css">
    <?php
        $conn = require 'includes\Dbh.php';
        include 'includes\insert.php';
        include 'includes\m_fetch.php';

        $fetch = new m_fetch;
        $data = $fetch->getAllMusic();
     ?>
    <meta charset="utf-8">
    <title>Website title</title>
  </head>
  <body>
    <h1 class="title">Website Title</h1>
    <nav class="topnav">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Page2</a></li>
        <li><a href="#">Page3</a></li>
      </ul>
    </nav>
    <div class="">
      <p><?= $data[0]["song_name"]?></p>
    </div>



  </body>
</html>
