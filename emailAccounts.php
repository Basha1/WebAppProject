<?php
include('dbconnect.php');
$sql = "SELECT email FROM tbl_users ORDER BY email DESC LIMIT 4";
$result1 = mysqli_query($DBcon, $sql);





