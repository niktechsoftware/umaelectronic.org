<!DOCTYPE html>
    <head> <title>Uma Electronics Institute</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="js/jquery-1.7.1.min.js"></script>
       <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" language="javascript">
        $(document).ready(function() {
            $('select#cat').change(
                    function(){
                        var category = $('#cat').val();					
                            $.post("./ajax/get_cource.php", {q1 : category}, function(data){						
                                 $('#cource').html(data);
                              }) 
                        }
                );	
        });
        </script>
    </head>
<body>
<div class="main_body">
	<div class="menu"><?php include "menu.php" ?></div>
    <div class="page_body">
    	<div class="top"><h2>NEW STUDENT ADMISSION</h2></div>
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
?>
          <form method="post" action="new_ad_db.php" id="form2" runat="server" enctype="multipart/form-data">
				
				<table width="87%" align="center">
					<tr>
						<td width="36%" align="left">NAME OF CANDIDATE*
						</td>
						<td width="64%" align="left"><input type="text" name="name" size="40" />
						</td>
						<td width="64%" align="left">&nbsp;</td>
					</tr>
					
					<tr>
						<td align="center" colspan="3">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">FATHER'S NAME* :
						</td>
						<td align="left"><input type="text" name="fname" size="40" required />
						</td>
						<td align="left">&nbsp;</td>
					</tr>
					
					<tr>
						<td align="center" colspan="3">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">DATE OF BIRTH* (DD/MM/YYYY) :
						</td>
						<td align="left"><input type="text" name="dob" size="12" id="inputField" required/>
						</td>
						<td align="left">&nbsp;</td>
					</tr>
					
					<tr>
						<td align="center" colspan="3">&nbsp;</td>						
					</tr>
					
					<tr>
						<td valign="top" align="left">ADDRESS* :</td>
						<td align="left"><textarea name="add" rows="5" cols="30" required></textarea></td>
						<td align="left">&nbsp;</td>
					</tr>
					
					<tr>
						<td align="center" colspan="3">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">MOBILE NUMBER* :</td>
						<td align="left"><input type="text" name="mob" size="40" required/></td>
						<td align="left">&nbsp;</td>
					</tr>
					<tr>
					
					<tr>
						<td align="center" colspan="3">&nbsp;</td>						
					</tr>
					
						<tr>
						  <td align="left">E MAIL ID* :</td>
						<td align="left"><input type="text" name="email" size="40" required/></td>
						<td align="left">&nbsp;</td>
				    </tr>
					
					<tr>
						<td align="center" colspan="3">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">EDUCATIONAL QUALIFICATION:</td>
						<td align="left">
						
							<table>
								<tr>
									<td>Highest Qualification</td>
									<td>&nbsp;&nbsp;</td>
									<td>Board / University</td>
									<td>&nbsp;&nbsp;</td>
									<td>Year</td>
								</tr>
								<tr>
									<td><input type="text" name="highestq" size="20" /></td>
									<td>&nbsp;&nbsp;</td>
									<td><input type="text" name="university" size="20" /></td>
									<td>&nbsp;&nbsp;</td>
									<td><input type="text" name="year" size="4" /></td>
								</tr>
							</table>
						</td>
						<td align="left">&nbsp;</td>
					</tr>
					
					<tr>
						<td align="center" colspan="3">&nbsp;</td>						
					</tr>
								<tr>
								  <td>COURSE APPLIED FOR:</td>
								  <td colspan="2">
                                  <select name="category" id="cat">
                                  	<option value="">-Select One-</option>
                                 <?php 
								 include_once("db.php");
								 $val = mysql_query("select distinct category from courses");
								 while($res = mysql_fetch_object($val))
								 {
									 ?>
								    <option value="<?php echo $res->category; ?>"><?php echo $res->category; ?></option>
                                 <?php } ?>
						          </select>
                                  &nbsp; &nbsp; &nbsp;
                                  Course:
								    <select name="course" id="cource"></select>
                                  </td>
								</tr>
                                <tr>
									<td>&nbsp;</td>
									
									
								</tr>
					
					<tr>
						<td align="center" colspan="3">&nbsp;</td>						
					</tr>
					<tr>
						<td>BROWSE YOUR IMAGE:</td>
						<td><input type="file" class="file_1" name="img" />JPEG, GIF 5MB max per image</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td align="center" colspan="3">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="center" colspan="3"><input type="submit" value="REGISTER" / class="myButton">	&nbsp;&nbsp;	<input type="reset" value="RESET" / class="myButton">	</td>						
					</tr>
				</table>					
                    </form>
              </div>
              <?php 
	if(isset($_POST['REGISTER']))
	{
		
		
		$mail = $_POST['email'];
		$to = $mail;
		$from = "info@hwebs.in";
		$subject = "Uma Electronic";

   
    $headers  = "From: $from\r\n";
    $headers .= "Content-type: text/html\r\n";
    mail($to, $subject, $headers);
	 
	
header("Location:new_ad.php?s=1");
	}
?>
        <div class="foot"> Copyright &copy; 2014 Hwebs Technologies</div>
    </div>
    
</div>		

						
	</body>
</html>