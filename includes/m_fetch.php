<?php
class m_fetch extends Dbh{
    public function getAllMusic(){
      $stmt = $this->connect()->query("SELECT * FROM music");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      $results[] = $row;
      }
      var_dump($results);
      return $results;
    }


    public function getAllLyrics(){
      $stmt = $this->connect()->query("SELECT * FROM lyrics");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      $results[] = $row;
      }
      //print_r($results);
      return $results;
    }


    public function getAllDates(){
      $stmt = $this->connect()->query("SELECT * FROM dates");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      $results[] = $row;
      }
          //print_r($results);
          return $results;
    }

    public function getAllTranslated(){
      $stmt = $this->connect()->query("SELECT * FROM Translated");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      $results[] = $row;
      }
          //print_r($results);
          return $results;
    }

}
