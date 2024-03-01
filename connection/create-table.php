<?php
require 'connection.php';
mysqli_select_db($conn, "grouphdb");

$sql = "CREATE TABLE IF NOT EXISTS grouph (
    id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(300) NOT NULL,
    phone VARCHAR(125),
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
