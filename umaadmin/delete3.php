<?php
include "db.php";
$sno = $_GET['i'];
$query="delete from team where sno='$sno'";
mysql_query($query);
header("Location:manage_teacher.php?i=1");
?>