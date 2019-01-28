<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8" />
	<title>Uma Computer Electronics Institute</title>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
	<meta name="author" content="" />

	<!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/inner.css" />

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico" />

</head>

<body>
<div id="bodychild">
	<div id="outercontainer">
    	
        <!-- HEADER -->
           <?php include"header.php" ?>
        <!-- END HEADER -->
        <div id="outermain">
        	<div id="maincontent">
        	<section id="mainthecontent"> <h2><font color="#000000"><b>Our Branches</b></font></h2>
		  <table align="center" width="630" cellpadding="2" cellspacing="2" border="1">
		  <tbody><tr align="center" bgcolor="#FFCC00">
		  <td><b><font color="#FFFFFF">Sr. No.</font></b></td>
		   <td><font color="#FFFFFF"><b>Branch Name</b></font></td>
		   <td><font color="#FFFFFF"><b>Branch Code</b></font></td>
		    <td><font color="#FFFFFF"><b>Address</b></font></td>
			 <td><font color="#FFFFFF"><b>Contact Person</b></font></td>
			  <td width="80"><font color="#FFFFFF"><b>Mobile No.</b></font></td>
			   <td><font color="#FFFFFF"><b>Email Address</b></font></td>
		  </tr>
          <?php include_once("umaadmin/db.php") ?>
          <?php $val = mysql_query("select * from branch"); ?>
          <?php $a = 1; ?>
          <?php while($res = mysql_fetch_object($val)) { ?>
		  <tr align="center" bgcolor="#FFFFFF">
		  <td><font color="#0033FF"><?php echo $a; ?></font></td>
		  <td><font color="#0033FF"><?php echo $res->b_name; ?></font></td>
		  <td><font color="#0033FF"><?php echo $res->b_code; ?></font></td>
		  <td><font color="#0033FF"><?php echo $res->add; ?></font></td>
		  <td><font color="#0033FF"><?php echo $res->Contact_Person; ?></font></td>
		  <td><font color="#0033FF"><?php echo $res->mob; ?></font></td>
		  <td><font color="#0033FF"><?php echo $res->email; ?></font></td>
		  </tr>
          <?php $a++; ?>
          <?php } ?>
          </tbody>
          </table>
          </div>
         
      <!-- MAIN CONTENT -->
        
        <!-- END MAIN CONTENT --> <!-- FOOTER -->
        <div id="outerfooter">
        	<div id="footercontainer">
            	<footer id="footer">Copyright &copy;2012 Uma electronics institute. All Rights Reserved .</footer>
            </div>
        </div>
        <!-- END FOOTER --><div class="clear"></div>
	</div> <!-- end outercontainer -->
    
</div> <!-- end bodychild -->

<!-- Javascript
================================================== -->
<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
<!-- jQuery Superfish -->
<script type="text/javascript" src="js/hoverIntent.js"></script> 
<script type="text/javascript" src="js/superfish.js"></script> 
<script type="text/javascript" src="js/supersubs.js"></script>

<!-- Form Contact Script -->
<script type="text/javascript" src="js/contact.js"></script>


<!-- Custom Script -->
<script type="text/javascript" src="js/custom.js"></script>

</body>

</html>