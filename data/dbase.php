<?php
$host = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($host, $username, $password);
if ($conn->connect_error) {
  die("Connection failed");
}
$sql = 'CREATE Database yak';
if ($conn->query($sql) == TRUE) {
  echo "Database was Created";
} else {
  echo "Failed to Create:" . $conn->error;
}
$conn->close();