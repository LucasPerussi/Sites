<?php
require "connect_db.php";

function connect_db(){
  global $servername, $username, $db_password, $dbname;
  $connl = mysqli_connect($servername, $username, $db_password, $dbname);

  if (!$connl) {
      die("Connection failed: " . mysqli_connect_error());
  }

  return($connl);
}

function disconnect_db($connl){
  mysqli_close($connl);
}

?>
