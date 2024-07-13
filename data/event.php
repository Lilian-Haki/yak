<?php
include('conn.php');
if (!(mysqli_query($conn,"CREATE TABLE event(
    id int AUTO_INCREMENT unique,
    event_code varchar(50) primary key,category varchar(50),
    topic varchar(250),county varchar(50),
    landmark varchar(100),venue varchar(100),
    start_date varchar(50),time varchar(50),computed double,
    end_date varchar(50),max_guest float,
    max_charge float,conf_guest float default 0,
    status float default 1,approval float default 0,date varchar(50))"))) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Event Table Created!";
}
mysqli_close($conn);