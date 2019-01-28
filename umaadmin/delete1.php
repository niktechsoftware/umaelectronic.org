<?php
include "db.php";
$sno = $_GET['i'];
$query="delete from registration where stu_id='$sno'";
mysql_query($query);
header("Location:manage_stu.php?i=1");
?>