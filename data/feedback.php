<?php
include('conn.php');
if (!(mysqli_query($conn,"CREATE TABLE feedback(
    id int auto_increment primary key,
    user_one varchar(50),
    user_one_id varchar(50),
    user_two varchar(50),
    user_two_id varchar(50),
    rate float default 0,
    message varchar(300),
    status float default 0,
    time varchar(50),
    date varchar(50))"))) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Feedback Table Created!";
}
mysqli_close($conn);