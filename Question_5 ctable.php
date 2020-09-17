<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lifestyle_store";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE user (

username VARCHAR(30) NOT NULL,
pass VARBINARY(32) NOT NULL,
)";

if ($conn->query($sql) === TRUE) {
  echo "Table  created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>