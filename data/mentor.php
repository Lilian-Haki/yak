<?php
include('conn.php');
if (!(mysqli_query($conn,"CREATE TABLE mentor(
    id int AUTO_INCREMENT unique,
    mentor_id varchar(50) primary key,
    fname varchar(50),lname varchar(50),
    dob varchar(50),age float,
    email varchar(50),username varchar(50),
    phone varchar(20),address varchar(50),password VARCHAR(250),
    status float default 0,remarks varchar(250),
    date varchar(50)
  )"))) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Mentor Table Created!";
}
mysqli_close($conn);