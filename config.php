<?php
$servername = "localhost";
$username = "username";
$password = "";

$conn = new mysqli($servername, $usernama, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);

}
$sql = "CREATE DATABASE biografi";
if ($conn->query($sql) === TRUE) {
  echo "Database created succesfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
