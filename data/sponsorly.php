<?php
include('conn.php');
if (!(mysqli_query($conn,"CREATE TABLE sponsorly(
    id int AUTO_INCREMENT unique,
    sponsor_code varchar(50) primary key,
    partner_id varchar(50),pay_code varchar(50),
    event_code varchar(50),amount float,
    date varchar(50))"))) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Sponsorly Table Created!";
}
mysqli_close($conn);