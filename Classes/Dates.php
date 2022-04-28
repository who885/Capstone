<?php
class Dates{
  public $name;
  public $name_local;
  public $language;
  public $description;
  public $country;
  public $location;
  public $type;
  public $date;
  public $date_year;
  public $date_month;
  public $date_day;
  public $week_day;


  public static function getAll($conn)
{
    $sql = "SELECT *
        FROM dates
        ORDER BY id;";

    $results = $conn->query($sql);

    # var_dump($articles);


    return $results->fetchAll(PDO::FETCH_ASSOC);
   #  var_dump($articles);
}

public static function getByID($conn, $id, $columns = '*')
  {
      $sql = "SELECT $columns
          FROM dates
          WHERE id = :id";

      $stmt = $conn->prepare($sql);

      $stmt->bindValue(':id', $id, PDO::PARAM_INT);

      $stmt->setFetchMode(PDO::FETCH_CLASS, 'dates');

      if ($stmt->execute()) {
          return $stmt->fetch();
      }
  }


}
