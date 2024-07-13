<?php
include('conn.php');
if (!(mysqli_query($conn,"CREATE TABLE payment(
    id int AUTO_INCREMENT unique,
    pay_code varchar(50) primary key,
    payer_id varchar(50),category varchar(50),
    mode varchar(50),code varchar(20),amount float,
    status float default 0,comment varchar(250),
    date varchar(50),edition varchar(50))"))) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Payment Table Created!";
}
mysqli_close($conn);