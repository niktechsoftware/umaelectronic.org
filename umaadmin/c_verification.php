<!DOCTYPE html>
	<head> <title>Uma Electronics Institute</title>
        <link rel="stylesheet" href="style.css" type="text/css">
	</head>
<body>
<div class="main_body">
	<div class="menu"><?php include "menu.php" ?></div>
    <div class="page_body">
    	<div class="top"><h2>Certificate verification</h2></div>
        <div class="fom">
        	<?php 
				$i = $_GET['i'];
				if($i == 1)
				{
					echo "<font color='green'>Added Successful..</font>";
				}
				if($i == 2)
				{
					echo "<font color='red'>Somthing wrong contact administrator..</font>";
				}
				if($i == 3)
				{
					echo "<font color='red'>This Enrollment Number already exist.....</font>";
				}
			?>
							<form method="post" action="verification.php" enctype="multipart/form-data" >
							<table width="100%" height="250" align="center">
								<tr>
						<td align="left">ENROLLMENT NO*
						</td>
						<td align="left"><input type="text" name="enroll" size="40" required/>
						</td>
					</tr>
					<tr>
						<td align="left">NAME OF CANDIDATE*
						</td>
						<td align="left"><input type="text" name="name" size="40" required/>
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">FATHER'S NAME* :
						</td>
						<td align="left"><input type="text" name="fname" size="40" required />
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
                    <tr>
						<td align="left">MOTHER'S NAME* :
						</td>
						<td align="left"><input type="text" name="mname" size="12"  required/>
						</td>
					</tr>
                    
					<tr>
						<td align="left">CITY :
						</td>
						<td align="left"><input type="text" name="city" size="12"  required/>
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td valign="top" align="left">CATEGORY* :</td>
					<td align="left"><input type="text" name="cat" size="12"  required/>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">CENTER CODE :</td>
						<td align="left"><input type="text" name="ccode" size="20" required/></td>
					</tr>
					<tr>
					<tr>
						<td align="left">STUDY CENTER :</td>
						<td align="left"><input type="text" name="scenter" size="20" required/></td>
					</tr>
					<tr>
                				<td align="left">DIVISION*</td>
						<td align="left"><input type="text" name="grade" size="40" required/></td>
					</tr>					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					<tr>
						<td>BROWSE YOUR IMAGE:</td>
						<td><input type="file" class="file_1" name="img" />JPEG, GIF 5MB max per image</td>
					</tr>
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
                    
                    <tr>
						<td valign="top" align="left">COURSE* :</td>
					<td align="left"><input type="text" name="course" size="12"  required/>
					</tr>
                    
                    <tr>
						<td valign="top" align="left">GENDER* :</td>
					<td align="left"><input type="text" name="gender" size="12"  required/>
					</tr>
					
					<tr>
						<td align="center" colspan="2"><input type="submit" value="REGISTER" / class="myButton">	&nbsp;&nbsp;	<input type="reset" value="RESET" / class="myButton">	</td>						
					</tr>
				</table>		
							</form>
        </div>
        <div class="foot"> Copyright &copy; 2014 Hwebs Technologies</div>
    </div>
    
</div>		

	</body>
</html>
