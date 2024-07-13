<?php
include('conn.php');
if (!(mysqli_query($conn,"CREATE TABLE settings(
    id int AUTO_INCREMENT  primary key,
    user varchar(50),
    user_id varchar(50),activity VARCHAR(300),
    date varchar(50)
  )"))) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Setting Table Created!";
}
mysqli_close($conn);