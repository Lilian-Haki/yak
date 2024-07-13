<?php
include('conn.php');
if (!(mysqli_query($conn,"CREATE TABLE admin(
    id int AUTO_INCREMENT unique,
    admno varchar(50) primary key,
    fname varchar(50),lname varchar(50),
    email varchar(50),username varchar(50),
    password VARCHAR(250),date varchar(50)
  )"))) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Admin Table Created!";
}
mysqli_close($conn);