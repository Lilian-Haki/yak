<?php
include('conn.php');
if (!(mysqli_query($conn,"CREATE TABLE staff(
    id int AUTO_INCREMENT unique,
    staff_id varchar(50) primary key,
    fname varchar(50),lname varchar(50),
    email varchar(50),username varchar(50),
    phone varchar(20),role varchar(50),
    password VARCHAR(250),status float default 0,
    remarks varchar(250),date varchar(50)
  )"))) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Staff Table Created!";
}
mysqli_close($conn);