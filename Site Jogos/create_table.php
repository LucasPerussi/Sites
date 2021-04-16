<?php $sql = "DELETE TABLE grr20177828_form"; ?>
<?php
require_once "connect_db.php";

// sql to create table
$sql = "DROP TABLE IF EXISTS grr20177828_form";
$sql = "CREATE TABLE grr20177828_form (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    comment VARCHAR(250) NOT NULL,
    reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabela grr20177828_form criada com sucesso";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
