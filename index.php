<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
        $conn = require 'includes\Dbh.php';
        include 'includes\insert.php';
        include 'includes\m_fetch.php';
     ?>
    <meta charset="utf-8">
    <title>Website title</title>
  </head>
  <body>
<?php

//this is all just example of my api. it will be removed later once we get stuff on the site itself.
$data =file_get_contents("https://api.song.link/v1-alpha.1/links?url=spotify%3Atrack%3A6sdTcq277BK1HlIn4ODjAl?si=b0e86cb1bddb443a&nd&userCountry=US&key=");
   //      echo "Raw Json data: <br>";
   $data = json_decode($data, true);
     var_dump($data);
             echo "<br>";


    $m_index = "ITUNES_SONG::1563361821";
            $m_index2 = "SPOTIFY_SONG::6sdTcq277BK1HlIn4ODjAl";
            $m_index3 = "NULL";
            $m_index4 = "NULL";
                echo "Some data from the formatted json: ";
                echo "<br>";
                echo "<br>";
        echo  "Song_Name: " . $data["entitiesByUniqueId"][$m_index]["title"];
        echo "<br>";
        echo "Artist_Name: " . $data["entitiesByUniqueId"][$m_index]["artistName"];
        echo "<br>";
        echo  "Thumnail: " . $data["entitiesByUniqueId"][$m_index]["thumbnailUrl"];
        echo "<br>";
                echo  "api_provider: " . $data["entitiesByUniqueId"][$m_index]["apiProvider"];
                echo "<br>";
                echo  "api_provider_2: " . $data["entitiesByUniqueId"][$m_index2]["apiProvider"];
                echo "<br>";
                echo  "api_provider_3: " . $data["entitiesByUniqueId"][$m_index3]["apiProvider"];
                echo "<br>";
                echo  "api_provider_4: " . $data["entitiesByUniqueId"][$m_index4]["apiProvider"];


                $name = $data["entitiesByUniqueId"][$m_index]["title"];
                $art = $data["entitiesByUniqueId"][$m_index]["artistName"];
                $thumb = $data["entitiesByUniqueId"][$m_index]["thumbnailUrl"];
                $api = $data["entitiesByUniqueId"][$m_index]["apiProvider"];
                $api_2 = $data["entitiesByUniqueId"][$m_index2]["apiProvider"];
                $api_3 = "NULL";
                $api_4 = "NULL";

            $object = new insert();

                //order $name, $art, $thumb, api, api1, api2, api3, api4
                $object->set($name, $art, $thumb, $api, $api_2, $api_3, $api_4);
                //creates the connection and adds to the database.
                $object->create();
?>

  </body>
</html>
