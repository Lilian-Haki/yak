<?php
include('conn.php');
if (!(mysqli_query($conn,"CREATE TABLE presenter(
    id int AUTO_INCREMENT unique,
    present_code varchar(50) primary key,
    event_code varchar(50),category varchar(50),
    presenter_id varchar(50),profile varchar(50),charge float,
    status float default 0,comment varchar(250),
    date varchar(50),edition varchar(50),
    perfomer float default 0,per_date varchar(50),
    pay float default 0,pay_date varchar(50))"))) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Presenter Table Created!";
}
mysqli_close($conn);