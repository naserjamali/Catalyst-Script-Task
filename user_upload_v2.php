<?php

$servername = "localhost";
$username = "root";
$password = "***password***";
$dbname = "company";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE users (
name VARCHAR(30) NOT NULL,
surname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL UNIQUE
)";

if ($conn->query($sql) === TRUE) {
echo "Table users created successfully!";
} else {
echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
