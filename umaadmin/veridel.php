<?php
include "db.php";
$sno = $_GET['i'];
$query="delete from c_varification where enrollment='$sno'";
mysql_query($query);
header("Location:manage_cverification.php?i=1");
?>