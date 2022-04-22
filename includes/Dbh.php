<?php

class Dbh {
private $db_host;
private $db_name;
private $db_user;
private $db_pass;
private $charset;

public function connect(){
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
       echo "connection successful!";
     }catch(PDOException $e){

          echo "Connection Failed: ". $e->getMessage();

          exit;
      }
}
}
/*   $this->db_host = 'localhost';
   $this->db_name = 'music';
   $this->db_user = 'root';
   $this->db_pass = 'password!123';*/
