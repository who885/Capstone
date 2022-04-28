<?php



class Music{

      public $id;
      public $song_name;
      public $art_name;
      public $thumb_link;
      public $platform_1;
      public $platform_2;
      public $platform_3;
      public $errors = [];

  public static function getAll($conn)
{
    $sql = "SELECT *
        FROM music
        ORDER BY id;";

    $results = $conn->query($sql);

    # var_dump($articles);


    return $results->fetchAll(PDO::FETCH_ASSOC);
   #  var_dump($articles);
}

public static function getByID($conn, $id, $columns = '*')
  {
      $sql = "SELECT $columns
          FROM music
          WHERE id = :id";

      $stmt = $conn->prepare($sql);

      $stmt->bindValue(':id', $id, PDO::PARAM_INT);

      $stmt->setFetchMode(PDO::FETCH_CLASS, 'Music');

      if ($stmt->execute()) {
          return $stmt->fetch();
      }
  }
}
