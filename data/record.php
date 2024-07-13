<?php
include('conn.php');
if (!(mysqli_query($conn,"CREATE TABLE records(
    id int auto_increment primary key,
    sponsor float default 0,
    booking float default 0,
    mentor float default 0,
    trainer float default 0,
    penalty float default 0,
    refund float default 0,
    amount float default 0,
    balance float default 0,
    date varchar(50),
    edition varchar(50)
)"))){
  die("Connection failed: " . $conn->connect_error);
}else{
    echo "Finance Book Table Created!";
  }
  mysqli_close($conn);