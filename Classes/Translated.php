<?php

/**
 *
 */
class Translated
{
  public $translated;

    public static function getAll($conn)
  {
      $sql = "SELECT *
          FROM translated
          ORDER BY id;";

      $results = $conn->query($sql);

      # var_dump($articles);


      return $results->fetchAll(PDO::FETCH_ASSOC);
     #  var_dump($articles);
  }

  public static function getByID($conn, $id, $columns = '*')
    {
        $sql = "SELECT $columns
            FROM Translated
            WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Translated');

        if ($stmt->execute()) {
            return $stmt->fetch();
        }
    }


}
