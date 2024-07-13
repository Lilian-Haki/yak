<?php
include("../data/conn.php");
echo mysqli_num_rows(mysqli_query($conn,"SELECT * from staff where role='Event Manager' and status=0"));?>