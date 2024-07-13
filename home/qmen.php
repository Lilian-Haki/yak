<?php
include("../data/conn.php");
echo mysqli_num_rows(mysqli_query($conn,"SELECT * from mentor where status=0"));?>