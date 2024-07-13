<?php
include('conn.php');
if (!(mysqli_query($conn,"CREATE TABLE disburse(
    id int AUTO_INCREMENT primary key,
    present_code varchar(50),event_code varchar(50),
    presenter_id varchar(50),category varchar(50),
    mode varchar(50),code varchar(20),amount float,
    status float default 0,
    date varchar(50),edition varchar(50))"))) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Disbursement Table Created!";
}
mysqli_close($conn);