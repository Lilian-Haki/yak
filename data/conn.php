<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "yak";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Failed to Connect: " . $conn->connect_error);
}