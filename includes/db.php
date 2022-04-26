<?php
//this is just for creating a connection to the database. its just cleaner to do this. 
$db = new Database();
return $db->getConn();
