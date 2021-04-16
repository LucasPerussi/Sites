<?php
require 'connect_db.php';

// Create connection
$connl = mysqli_connect($servername, $username, $db_password);

if (!$connl) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check connection
if (!$connl) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE $dbname";
if (mysqli_query($connl, $sql)) {
    echo "<br>Database created successfully<br>";
} else {
    echo "<br>Error creating database: " . mysqli_error($connl);
}

// Choose database
$sql = "USE $dbname";
if (mysqli_query($connl, $sql)) {
    echo "<br>Database changed successfully<br>";
} else {
    echo "<br>Error changing database: " . mysqli_error($connl);
}

// sql to create table
$sql = "CREATE TABLE $table_users (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  lastname VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  /*password VARCHAR(128) NOT NULL,
  created_at DATETIME,
  updated_at DATETIME,
  last_login_at DATETIME,
  last_logout_at DATETIME,
  UNIQUE (email)*/
)";

if (mysqli_query($connl, $sql)) {
    echo "<br>Table created successfully<br>";
} else {
    echo "<br>Error creating database: " . mysqli_error($connl);
}

mysqli_close($connl)
?>
