<?php
include("../data/conn.php");
echo mysqli_num_rows(mysqli_query($conn,"SELECT * from trainer where status=0"));?>