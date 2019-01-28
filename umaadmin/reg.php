<?php
include_once 'db.php';

$prodname = $_POST['name'];
$detail = $_POST['add'];
$file = $_FILES['img'];
$price = $_POST['year'];
$quant = $_POST['dept'];


$t = mysql_query("INSERT INTO sel_student(stu_name,stu_address,image,sel_year,department) VALUES('$prodname','$detail','$file[name]','$price','$quant')");


if($t)
{
	move_uploaded_file($file["tmp_name"],"./stu_image/" . $file["name"]);
header("Location:student_reg.php?i=1");
}

else
{
	header("Location:student_reg.php?i=2");

	}

?>