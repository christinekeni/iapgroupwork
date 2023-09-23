<?php
  require_once "db_constants.php";

//Creating MySqli connection
$db_connect = new mysqli(HOSTNAME,DB_USER,DB_PASS,DB_NAME);

if ($db_connect->connect_error){
    die("Connection failed: " . $db_connect->connect_error);
}


?>
