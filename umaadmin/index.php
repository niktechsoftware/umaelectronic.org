<html>
    <head>		
    	<title>Uma Electronics pannel | Admin Panel</title>
        <style type="text/css">
		html
		{
			font-family:Arial, Helvetica, sans-serif;
		}
		.main
		{
			width:1000px;
			position:relative;
			text-align:center;
			margin-left:auto;
			margin-right:auto;
		}
		.head{
			background: #efc5ca; /* Old browsers */
background: -moz-linear-gradient(top,  #efc5ca 0%, #d24b5a 50%, #ba2737 51%, #f18e99 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#efc5ca), color-stop(50%,#d24b5a), color-stop(51%,#ba2737), color-stop(100%,#f18e99)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #efc5ca 0%,#d24b5a 50%,#ba2737 51%,#f18e99 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #efc5ca 0%,#d24b5a 50%,#ba2737 51%,#f18e99 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #efc5ca 0%,#d24b5a 50%,#ba2737 51%,#f18e99 100%); /* IE10+ */
background: linear-gradient(to bottom,  #efc5ca 0%,#d24b5a 50%,#ba2737 51%,#f18e99 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#efc5ca', endColorstr='#f18e99',GradientType=0 ); /* IE6-9 */

			width:500px;
			border-radius:30px 30px 0px 0px;
			border:1px solid #ccc;
			color:#FFF;
			margin-top:100px;
			margin-left:auto;
			margin-right:auto;
		}
		.login{
			width:500px;
			border-radius:0px 0px 30px 30px;
			border:1px solid #ccc;
			margin-left:auto;
			margin-right:auto;
			background: rgb(226,226,226); /* Old browsers */
background: #f3c5bd; /* Old browsers */
background: -moz-linear-gradient(top,  #f3c5bd 0%, #e86c57 50%, #ea2803 51%, #ff6600 75%, #c72200 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f3c5bd), color-stop(50%,#e86c57), color-stop(51%,#ea2803), color-stop(75%,#ff6600), color-stop(100%,#c72200)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #f3c5bd 0%,#e86c57 50%,#ea2803 51%,#ff6600 75%,#c72200 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #f3c5bd 0%,#e86c57 50%,#ea2803 51%,#ff6600 75%,#c72200 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #f3c5bd 0%,#e86c57 50%,#ea2803 51%,#ff6600 75%,#c72200 100%); /* IE10+ */
background: linear-gradient(to bottom,  #f3c5bd 0%,#e86c57 50%,#ea2803 51%,#ff6600 75%,#c72200 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f3c5bd', endColorstr='#c72200',GradientType=0 ); /* IE6-9 */


 /* IE6-9 */

		}
		.copy{
			width:500px;
			margin-top:200px;
			text-align:center;
			margin-left:auto;
			margin-right:auto;
		}
		

.myButton {
	-moz-box-shadow:inset 7px -50px 0px 24px #ffffff;
	-webkit-box-shadow:inset 7px -50px 0px 24px #ffffff;
	box-shadow:inset 7px -50px 0px 24px #ffffff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffffff), color-stop(1, #f6f6f6));
	background:-moz-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:-webkit-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:-o-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:-ms-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:linear-gradient(to bottom, #ffffff 5%, #f6f6f6 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0);
	background-color:#ffffff;
	-moz-border-radius:13px;
	-webkit-border-radius:13px;
	border-radius:13px;
	border:2px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#666666;
	font-family:arial;
	font-size:14px;
	font-weight:bold;
	padding:11px 35px;
	text-decoration:none;
	text-shadow:-14px -6px 18px #ffffff;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f6f6f6), color-stop(1, #ffffff));
	background:-moz-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
	background:-webkit-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
	background:-o-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
	background:-ms-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
	background:linear-gradient(to bottom, #f6f6f6 5%, #ffffff 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f6f6f6', endColorstr='#ffffff',GradientType=0);
	background-color:#f6f6f6;
}
.myButton:active {
	position:relative;
	top:1px;
}
</style>
    </head>
<body>
<div class="main">
	<div class="head"><h3>Administration Login</h3></div>
    <div class="login">
    	
<form method="post" action="login_db.php" enctype="multipart/form-data">
                                
                                <table align="center" height="200">
									<tr>
										<td> User Name </td>
										<td><input type="text" name="uid" /></td>
									</tr>
									<tr>
										<td >Password </td>
										<td ><input type="password" name="pass" /></td>
									</tr>
									<tr>
										<td align="center" colspan="2" >
											<input type="submit" value="Submit"  class="myButton" />
											<input type="reset" value="Reset"  class="myButton"/>
										</td>
									</tr>
								</table>
                            </form>	
    </div>
    <div class="copy">Copyright &copy; 2014 Hwebs technologies.</div>
</div>
<?php

$i = $_GET['i'];

if($i == 1)
{
echo '<font color="red"><b>Wrong UserId or Password Contact your Website administrator.</b></font>';
}

?> 
							

						
	</body>
</html>
