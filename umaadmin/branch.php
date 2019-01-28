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
    	<div class="top"><h2>OUR BRANCHES</h2></div>
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
          <form method="post" action="branch_db.php" id="form2" runat="server" enctype="multipart/form-data">
				
				<table width="87%" align="center">
					<tr>
						<td width="36%" align="left">BRANCH NAME*
						</td>
						<td width="64%" align="left"><input type="text" name="b_name" size="40" />
						</td>
						<td width="64%" align="left">&nbsp;</td>
					</tr>
					
					<tr>
						<td align="center" colspan="3">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">BRANCH CODE* :
						</td>
						<td align="left"><input type="number" name="b_code" size="10"
						</td>
						<td align="left">&nbsp;</td>
					</tr>
					
					<tr>
						<td align="center" colspan="3">&nbsp;</td>						
					</tr>
					
					
					
					<tr>
						<td valign="top" align="left">ADDRESS* :</td>
						<td align="left"><textarea name="add" rows="5" cols="40" required></textarea></td>
						<td align="left">&nbsp;</td>
					</tr>
					
					<tr>
						<td align="center" colspan="3">&nbsp;</td>						
					</tr>
                    
                    <tr>
						<td align="left">CONTACT PERSON* :
						</td>
						<td align="left"><input type="text" name="contact_person" size="30"
						</td>
						<td align="left">&nbsp;</td>
					</tr>
                    <tr>
						<td align="center" colspan="3">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">MOBILE NUMBER* :</td>
						<td align="left"><input type="number" name="mob" size="10" required/></td>
						<td align="left">&nbsp;</td>
					</tr>
					<tr>
					
					<tr>
						<td align="center" colspan="3">&nbsp;</td>						
					</tr>
					
						<tr>
						  <td align="left">E MAIL ID* :</td>
						<td align="left"><input type="email" name="email" size="40" required/></td>
						<td align="left">&nbsp;</td>
				    </tr>
					
					
					
					<tr>
						<td align="center" colspan="3"><input type="submit" value="Enter" class="myButton" />&nbsp;&nbsp;	<input type="reset" value="RESET" class="myButton" />	</td>						
					</tr>
				</table>					
                    </form>
              </div>
        <div class="foot"> Copyright &copy; 2014 Hwebs Technologies</div>
    </div>
    
</div>		

						
	</body>
</html>