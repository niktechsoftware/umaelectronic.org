<?php
$dbhost='localhost';
$dbuser='gfincpnt_uma';
$dbpass="rahul!123singh";
$conn=mysql_connect($dbhost,$dbuser,$dbpass) or die ("Database Problem");
mysql_select_db('gfincpnt_uma') or die ("Error ".mysql_error());
?>