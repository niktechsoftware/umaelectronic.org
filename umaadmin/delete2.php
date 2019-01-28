<?php
include "db.php";
$sno = $_GET['i'];
$query="delete from news where s_no='$sno'";
mysql_query($query);
header("Location:manage_news.php?i=1");
?>