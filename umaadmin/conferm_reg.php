<!DOCTYPE html>
    <head> <title>Uma Electronics Institute</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
<body>
<div class="main_body">
	<div class="menu"><?php include "menu.php" ?></div>
    <div class="page_body">
    	<div class="top"><h2>REGISTRATION CONFIRMED</h2></div>
        <div class="fom">
        <table width="100%" align="center" height="300">	
			<?php 	
				
		include_once 'db.php';				
				$code = $_GET['i'];
				$q1="select * from registration where stu_id = '$code'";			
				$i=0;
				$s1=mysql_query($q1);
				while($o1=mysql_fetch_object($s1)) 
				{ 
				?>
					<tr>
						<td align="left">STUDENT ID 
						</td>
						<td align="left"> <strong><?php echo $o1->stu_id; ?></strong>
						</td>
					</tr>
					<tr>
					
						<td align="left">STUDENT PASSWORD</td>
						<td align="left"><strong><?php echo $o1->password; ?></strong></td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					<tr>
						<td align="left">
						</td>
						<td align="right"><?php echo '<img src="./nstu_image/'.$o1->image.'" height="122" width="122" />'; ?>
						</td>
					</tr>
					<tr>
						<td align="left">NAME OF CANDIDATE*
						</td>
						<td align="left"><strong><?php echo $o1->name; ?></strong>
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">FATHER'S NAME* :
						</td>
						<td align="left"><strong><?php echo $o1->fname; ?></strong>
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">DATE OF BIRTH* (DD/MM/YYYY) :
						</td>
						<td align="left"><strong><?php echo $o1->dob; ?></strong>
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td valign="top" align="left">ADDRESS* :</td>
						<td align="left"><strong><?php echo $o1->address; ?></strong></td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">MOBILE NUMBER* :</td>
						<td align="left"><strong><?php echo $o1->mob; ?></strong></td>
					</tr>
					<tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
						<td align="left">E MAIL ID* :</td>
						<td align="left"><strong><?php echo $o1->email; ?></strong></td>
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
									<td align="center"><strong><?php echo $o1->highestq; ?></strong></td>
									<td>&nbsp;&nbsp;</td>
									<td><strong><?php echo $o1->university; ?></strong></td>
									<td>&nbsp;&nbsp;</td>
									<td><strong><?php echo $o1->year; ?></strong></td>
								</tr>
							</table>
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
						<td align="left">CATEGORY</td>
						<td align="left"><strong><?php echo $o1->category ?></strong>
						
						</td>
                        </td>
					</tr>
					<tr>
                    <td align="left">COURSE</td>
					<td align="left"><strong><?php echo $o1->course ?></strong>
                    </tr>
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>					
					
					<tr>
						<td align="center" colspan="2"><input type="button" onclick="printDiv('printableArea')" value="Print" /></td>						
					</tr>
				
				
				<?php }  ?>
                
				</table>
				<font color="Green">Note Student Id And Password for Student Login</font>
         </div>
        <div class="foot"> Copyright &copy; 2014 Hwebs Technologies</div>
    </div>
    
</div>		
						
	</body>
</html>
