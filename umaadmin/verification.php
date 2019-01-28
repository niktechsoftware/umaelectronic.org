<?php 
	include_once"db.php";
	include_once("mainclass.php");
	$id = $_POST['id'];
	$enroll = $_POST['enroll'];
	$name = $_POST['name'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$city = $_POST['city'];
	$cat = $_POST['cat'];
	$ccode = $_POST['ccode'];
	$scenter = $_POST['scenter'];
	$grade = $_POST['grade'];
	$course = $_POST['course'];
	$gender = $_POST['gender'];
	
	if(!empty($_FILES["img"]["name"])){
	$time=time();
	$account_pic=$time.$_FILES["img"]["name"];
	move_uploaded_file($_FILES["img"]["tmp_name"],
     "student_account_pic/".$account_pic);
	}else $account_pic="";
	
	
	$check = mysql_query("select * from c_varification where enrollment = '$enroll'");
	$num = mysql_num_rows($check);
	if($num > 0)
	{
	header("Location:c_verification.php?i=3");
	}
	else{	
		if($db->insert('c_varification',array("","$enroll","$name","$fname","$mname","$city","$cat","$ccode","$scenter","$grade",
		"$account_pic","$course","$gender"))) 
			{
		header("Location:c_verification.php?i=1");
		//echo "True";
		}
		else
		{
		header("Location:c_verification.php?i=2");
		}
	}


/*}
else
{
	header("Location:c_verification.php?i=2");
}*/

?>
