<?php
include('conn.php');
if (!(mysqli_query($conn,"CREATE TABLE booking(
    id int AUTO_INCREMENT unique,
    book_code varchar(50) primary key,
    client_id varchar(50),pay_code varchar(50),
    ticket_code varchar(50),event_code varchar(50),
    seats float,unit_charge float,
    amount float,date varchar(50),
    finance float default 0,fin_date varchar(50),
    manage float default 0,man_date varchar(50),
    client float default 0,cli_date varchar(50),
    perfomer float default 0,per_date varchar(50))"))) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Booking Table Created!";
}
mysqli_close($conn);