<?php
include_once 'db.php';
include_once("mainclass.php");
$b_name = $_POST['b_name'];
$b_code = $_POST['b_code'];
$add = $_POST['add'];
$contact_person = $_POST['contact_person'];
$mob = $_POST['mob'];
$email = $_POST['email'];

	if($db->insert('branch',array("","$b_name","$b_code","$add","$contact_person","$mob","$email")))
	{
	header("Location:branch.php?i=".$ID."");
	//echo "True";
	}
	else
	{
	header("Location:branch.php?i=1");
	}


/*}
else
{
	header("Location:branch.php?i=2");
}*/

?>
