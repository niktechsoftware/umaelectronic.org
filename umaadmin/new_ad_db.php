<?php
include_once 'db.php';
$name = $_POST['name'];
$fname = $_POST['fname'];
$dob = $_POST['dob'];
$add = $_POST['add'];
$mob = $_POST['mob'];
$email = $_POST['email'];
$highestq = $_POST['highestq'];
$university = $_POST['university'];
$category = $_POST['category'];
$course = $_POST['course'];
$year = $_POST['year'];

//echo '1';
$file = $_FILES['img'];
$status="1";

// generate rendom student unique id
$a = mt_rand(100000,999999); 
			$b = mt_rand(100000,999999);
			$d = mt_rand(100000,999999);
			$c = $a + $b + $d;
			$subName=substr($name,0,3);			
			$ID = $subName."$c";
			
$l = mt_rand(100000,999999); 
			$m = mt_rand(100000,999999);
			$n = mt_rand(100000,999999);
			$o = $l + $m + $n;
			$subName1=substr($name,0,1);			
			$pass = $subName1."$o";
// ID is unique id

/*
$q1="select id from Registration where email='".$email."'";
$temp;
 $s= mysql_query($q1);
		  
		  while($row = mysql_fetch_array($s))
  			{
  			$temp = $row['id'];
  			}
  			echo $temp;
if(!$temp)
{
*/	
	$t = "INSERT INTO registration (stu_id, name, fname, dob, address, mob, email, highestq, university, year,category, course,password, image) VALUES ('$ID','$name','$fname','$dob','$add','$mob','$email','$highestq','$university','$year','$category','$course','$pass','$file[name]')";
	
	if (!mysql_query($t))
	  {
	  die('Error: ' . mysql_error());
	  }	
	move_uploaded_file($file["tmp_name"],"./nstu_image/" . $file["name"]);
	//echo "Hello ".$username."<br> Kindly check 	your mail for Account Activation. Easily One Click Activation.";

	if($t)
	{
	header("Location:conferm_reg.php?i=".$ID."");
	//echo "True";
	}
	else
	{
	header("Location:register.php?i=1");
	}


/*}
else
{
	header("Location:register.php?i=2");
}*/

?>
