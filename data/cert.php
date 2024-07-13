<?php
include('conn.php');
if (!(mysqli_query($conn,"CREATE TABLE certificates(
    cert_id int AUTO_INCREMENT primary key,
    category varchar(50),
    client_id varchar(50),book_code varchar(50),
    ticket_code varchar(50),event_code varchar(50),
    presenter_id varchar(50),presenter_sign varchar(50),
    date varchar(50),status float default 0,
    issuer_id varchar(50),issuer_sign varchar(50),issue_date varchar(50),
    client float default 0,cli_date varchar(50))"))) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Certificate Table Created!";
}
mysqli_close($conn);