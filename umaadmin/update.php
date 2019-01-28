<!DOCTYPE html>
	<head> <title>Uma Electronics Institute</title>
        <link rel="stylesheet" href="style.css" type="text/css">
	</head>
<body>
<div class="main_body">
	<div class="menu"><?php include "menu.php" ?></div>
    <div class="page_body">
    	<div class="top"><h2>Selected Student</h2></div>
        <div class="fom">
        <form method="post" action="edit_sel_stu.php" enctype="multipart/form-data" >
        <?php 
				$i = $_GET['i'];
				if($i == 1)
				{
					echo "<font color='green'>Record Edited Successful..</font>";
				}
				if($i == 2)
				{
					echo "<font color='red'>Somthing wrong contact administrator..</font>";
				}
			?>
        	<?php 
        	include_once"db.php";
        			$i = $_GET['i'];
				$val = "select * from sel_student where s_no = '$i'";
				$res = mysql_query($val);
				while($row = mysql_fetch_array($res))
				{
			?>
							
							<table width="100%" height="250" align="center">
								<tr>
									<td>Name</td>
									<td>
										<input type="text" value="<?php echo $row['stu_name']; ?>" name="name" />
										<input type="hidden" value="<?php echo $i; ?>" name="sno" />
									</td>
								</tr>
								<tr>
									<td>Address</td>
									<td><input type="text" value="<?php echo $row['stu_address']; ?>" name="add"/></td>
								</tr>
								<tr>
									<td>Select Year</td>
									<td><input type="text" value="<?php echo $row['sel_year']; ?>" name="year"/></td>
								</tr>
								
								<tr>
									<td align="right"><input type="submit" value="Edit Detail" /></td>
									<td><input type="reset" value="Reset" /></td>
								</tr>
							</table>
		<?php } ?>
							</form>
        </div>
        <div class="foot"> Copyright &copy; 2014 Hwebs Technologies</div>
    </div>
    
</div>		

	</body>
</html>