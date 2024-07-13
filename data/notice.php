<?php
include('conn.php');
if (!(mysqli_query($conn,"CREATE TABLE notices(
    id int AUTO_INCREMENT primary key,
    user varchar(50),user_id varchar(50),
    activity varchar(400),date varchar(50))"))) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Notice Table Created!";
}
mysqli_close($conn);