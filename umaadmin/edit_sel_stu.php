<?php
include_once 'db.php';

$prodname = $_POST['name'];
$detail = $_POST['add'];
$price = $_POST['year'];
$quant = $_POST['dept'];
$sno = $_POST['sno'];


$t = mysql_query("UPDATE sel_student SET stu_name = '$prodname',stu_address = '$detail',sel_year = '$price',department = '$quant' where s_no = '$sno'");


if($t)
{
header("Location:update.php?i=1");
}

else
{
	header("Location:update.php?i=2");

	}

?>