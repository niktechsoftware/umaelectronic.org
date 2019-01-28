<!DOCTYPE html>
	<head> <title>Uma Electronics Institute</title>
        <link rel="stylesheet" href="style.css" type="text/css">
	</head>
<body>
<div class="main_body">
	<div class="menu"><?php include "menu.php" ?></div>
    <div class="page_body">
    	<div class="top"><h2>Uma Gallery</h2></div>
        <div class="fom">
        	<?php 
				$i = $_GET['i'];
				if($i == 1)
				{
					echo "<font color='green'>Added Successful..</font>";
				}
				if($i == 2)
				{
					echo "<font color='red'>Something wrong contact administrator..</font>";
				}
			?>
							<form method="post" action="reg.php" enctype="multipart/form-data" >
							<table width="100%" height="250" align="center">
								<tr>
									<td>Name</td>
									<td><input type="text" name="name"/></td>
								</tr>
								
								<tr>
									<td>image</td>
									<td><input type="file" name="img"/></td>
								</tr>
								
							<tr>
									<td><input type="submit" value="Enter Detail" class="myButton" /></td>
									<td><input type="reset" value="Reset" class="myButton" /></td>
								</tr>
							</table>
							</form>
        </div>
        <div class="foot"> Copyright &copy; 2014 Hwebs Technologies</div>
    </div>
    
</div>		

	</body>
</html>