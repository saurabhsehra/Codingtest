<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lifestyle_store";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE addresses (

street VARCHAR(30) NOT NULL,
pincode INT(10) NOT NULL,
country VARCHAR(30) NOT NULL,
state VARCHAR(30) NOT NULL,
phone num INT(10)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table  created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>