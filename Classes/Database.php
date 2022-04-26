<?php
//same db as before. nothing has changed.
class Database {
private $db_host;
private $db_name;
private $db_user;
private $db_pass;
private $charset;

//i have removed the credentials to log into the database because i don't think its a good idea to have that on a public github lol.
public function getConn(){
  $this->db_host = '';
  $this->db_name = '';
  $this->db_user = '';
  $this->db_pass = '';
   //$this->charset = 'utf8';
   $dsn = 'mysql:host='.$this->db_host.';dbname='.$this->db_name;

  try{

      $db = new PDO($dsn, $this->db_user, $this->db_pass);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // sets PDO up to return an error/exception when we try to connect.
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

       return $db;

     }catch(PDOException $e){

          echo "Connection Failed: ". $e->getMessage();

          exit;
      }
}
}
