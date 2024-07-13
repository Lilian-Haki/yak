<?php
include('conn.php');
if (!(mysqli_query($conn,"CREATE TABLE ticket(
    id int AUTO_INCREMENT unique,
    ticket_code varchar(50) primary key,
    event_code varchar(50),category varchar(50),
    type varchar(50),options float default 0,charge float,
    current_seat float default 0,adjusted_seat float default 0,
    date varchar(50),edition varchar(50))"))) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Ticket Table Created!";
}
mysqli_close($conn);