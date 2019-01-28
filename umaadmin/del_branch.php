<?php
include "db.php";
$sno = $_GET['i'];
$query="delete from branch where b_code='$sno'";
mysql_query($query);
header("Location:branch_manage.php?i=1");
?>