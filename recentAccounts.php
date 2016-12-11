<?php
include('dbconnect.php');
$sql = "SELECT username FROM tbl_users ORDER BY username DESC LIMIT 4";
$result = mysqli_query($DBcon, $sql);



?>
