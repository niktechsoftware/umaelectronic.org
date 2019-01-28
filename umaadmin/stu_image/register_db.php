<?php 
	include_once"db.php";
	
	$name = $_POST['name'];
	$fname = $_POST['fname'];
	$add = $_POST['address'];
	$email = $_POST['email'];
	$m_number = $_POST['m_number'];
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$hint = $_POST['hint'];
	
	
	$check = "select * from registration where username = '$uname'";
	$res = mysql_query($check);
	
	$len = mysql_num_rows($res);
	
	if($len <= 0)
	{
		$insert = "insert into registration (name,fname,address,number,email,username,password,hints) values('$name','$fname','$add','$m_number','$email','$uname','$pass','$hint')";
		
		if(!mysql_query($insert))
		{
			die ('Error: ' . mysql_error());
		}
		else
		{
		
		echo "Data Inserted";	
		}
	}
	else
	{
		header("Location:formdemo.php?i=1");
	}

?>