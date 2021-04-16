<?php
$servername = "gitlab.tadsufpr.net.br";
$username = "web1";
$password = "tads";
$dbname = "ds122_2021_especial_2";
$table_users = "grr20193759";
$db_password = "tads";

// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);

// Create connection 2
$connl = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (!$connl) {
    die("Connection failed: " . mysqli_connect_error());
}
?>