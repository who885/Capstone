<?php


/**
 *
 *@param object $conn creates connection to database
 *@param
 */
class insert extends Dbh
{
public $id;
public $song_name = "SongName";
public $art_name = "artist";
public $thumb_link = "thumnail link";
public $apiProvider = "api";
public $apiProvider_2 = "api";
public $apiProvider_3 = "api";
public $apiProvider_4 = "api";

public function set($name, $art, $thumb, $api, $api_2, $api_3, $api_4){
  $this->song_name = $name;
  $this->art_name = $art;
  $this->thumb_link = $thumb;
  $this->apiProvider = $api;
  $this->apiProvider_2 = $api_2;
  $this->apiProvider_3 = $api_3;
  $this->apiProvider_4 = $api_4;

}


public function create(){

  $sql = "INSERT INTO music (song_name, art_name, Thumb_link, api_provider, api_provider_2, api_provider_3, api_provider_4) VALUES (?,?,?,?,?,?,?)";
$stmt = $this->connect()->prepare($sql);
  $stmt->execute([$this->song_name, $this->art_name, $this->thumb_link, $this->apiProvider, $this->apiProvider_2, $this->apiProvider_3, $this->apiProvider_4]);
  }
}
