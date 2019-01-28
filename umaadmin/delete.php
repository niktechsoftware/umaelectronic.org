<?php
include "db.php";
$sno = $_GET['i'];
$query="delete from sel_student where s_no='$sno'";
mysql_query($query);
header("Location:stu_manage.php?i=1");
?>