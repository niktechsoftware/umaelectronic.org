<!DOCTYPE html>
	<head> <title>Uma Electronics Institute</title>
        <link rel="stylesheet" href="style.css" type="text/css">
	</head>
<body>
<div class="main_body">
	<div class="menu"><?php include "menu.php" ?></div>
    <div class="page_body">
    	<div class="top"><h2>STUDENT DETAIL</h2></div>
        <div class="fom">
                        <form method="post" action="stu_detail.php">
                            <table align="center">
                                <tr>
                                    <td>Student Id</td>
                                    <td><input type="text" name="stu_id" /></td>
                                    <td><input type="submit" value="GET DETAIL" class="myButton" /></td>
                                </tr>
                            </table>
                        </form>
<br /><br /><br /><br /><br />
			<?php 
			
				$stu_id = $_POST['stu_id'];
				if(strlen($stu_id) > 0 )
				{	
				
				include_once 'db.php';				
				$code = $_GET['i'];
				$q1="select * from registration where stu_id = '$stu_id'";			
				$i=0;
				$s1=mysql_query($q1);
				while($l=mysql_fetch_array($s1)) 
				{ 
				?>

				
				
				<table width="80%" align="center">
					<tr>
						<td align="left">STUDENT ID 
						</td>
						<td align="left"> <?php echo $l['stu_id']; ?>
						</td>
					</tr>
					<tr>
					
						<td align="left">STUDENT PASSWORD</td>
						<td align="left"><strong><?php echo $l['password']; ?></strong></td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					<tr>
						<td align="left">
						</td>
						
						</td>
					</tr>
					<tr>
						<td align="left">NAME OF CANDIDATE*
						</td>
						<td align="left"><strong><?php echo $l['name']; ?></strong>
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">FATHER'S NAME* :
						</td>
						<td align="left"><strong><?php echo $l['fname']; ?></strong>
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">DATE OF BIRTH* (DD/MM/YYYY) :
						</td>
						<td align="left"><strong><?php echo $l['dob']; ?></strong>
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td valign="top" align="left">ADDRESS* :</td>
						<td align="left"><strong><?php echo $l['address']; ?></strong></td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">MOBILE NUMBER* :</td>
						<td align="left"><strong><?php echo $l['mob']; ?></strong></td>
					</tr>
					<tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
						<td align="left">E MAIL ID* :</td>
						<td align="left"><strong><?php echo $l['email']; ?></strong></td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">EDUCATIONAL QUALIFICATION:</td>
						<td align="left">
						
							<table style="border:1px #006666 solid;" width="100%">
								<tr>
									<td align="center">Highest Qualification</td>
									<td>&nbsp;&nbsp;</td>
									<td>Board / University</td>
									<td>&nbsp;&nbsp;</td>
									<td>Year</td>
								</tr>
								<tr>
									<td align="center"><strong><?php echo $l['highestq']; ?></strong></td>
									<td>&nbsp;&nbsp;</td>
									<td><strong><?php echo $l['university']; ?></strong></td>
									<td>&nbsp;&nbsp;</td>
									<td><strong><?php echo $l['year']; ?></strong></td>
								</tr>
							</table>
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
						<td align="left">course</td>
						<td align="left"><strong><?php echo $l['course']; ?></strong>
						
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>					
					
					<tr>
						<td align="center" colspan="2"><input type="button" onclick="printDiv('printableArea')" value="Print" /></td>						
					</tr>
				</table>
				
				
				<?php 
				}
				
				}  ?>
			</div>
        <div class="foot"> Copyright &copy; 2014 Hwebs Technologies</div>
    </div>
    
</div>			
						
	</body>
</html>
