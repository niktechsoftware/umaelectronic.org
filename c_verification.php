<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8" />
	<title>uma Electronics Institute</title>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
	<meta name="author" content="" />

	<!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/inner.css" />
    <link rel="stylesheet" href="styles/prettyPhoto.css" media="screen"/>

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
        <!-- MAIN CONTENT -->
         <div id="outermain">
        	<div id="maincontent">
        	<section id="mainthecontent">
            	
                <h1 class="pagetitle" style="font:x-large;">CERTIFICATE</h1>
               <div class="aligncenter"> 
                 <?php 
			
				$enroll = $_POST['enroll'];
				if(strlen($enroll) > 0 )
				{	
				
				include_once 'db.php';				
				$code = $_GET['i'];
				$q1="select * from c_varification where enrollment = '$enroll'";			
				$i=0;
				$s1=mysql_query($q1);
				while($ol=mysql_fetch_object($s1)) 
				{ 
				?>
                    <table width="100%" align="center" style="font-size:16px;">
					<tr>
						<td align="left">Enrollment Number: 
						</td>
						<td align="left"> <?php echo $ol->enrollment; ?>
						</td>
					</tr>
				    <tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					<tr>
						<td align="left">
						</td>
         <td align="right"><img src="umaadmin/student_account_pic/<?php echo $ol->image; ?>" height="122" width="122" />'
						</td>
                        
                       </td>
					</tr>
					<tr>
						<td align="left">NAME OF CANDIDATE*
						</td>
						<td align="left"><strong><?php echo $ol->name; ?></strong>
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">FATHER'S NAME* :
						</td>
						<td align="left"><strong><?php echo  $ol->fname; ?></strong>
						</td>
					</tr>
                    <tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
                    <tr>
						<td align="left">MOTHER NAME* :
						</td>
						<td align="left"><strong><?php echo  $ol->mname; ?></strong>
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
                     <tr>
						<td align="left">CITY* :
						</td>
						<td align="left"><strong><?php echo  $ol->city; ?></strong>
						</td>
					</tr>
                    <tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
                    <tr>
						<td align="left">CATEGORY* :
						</td>
						<td align="left"><strong><?php echo $ol->cat; ?></strong>
						</td>
					</tr>
                    <tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
                     <tr>
						<td align="left">CENTER CODE* :
						</td>
						<td align="left"><strong><?php echo  $ol->center_code; ?></strong>
						</td>
					</tr>
                     <tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
                    <tr>
						<td align="left">STUDY CENTER* :
						</td>
						<td align="left"><strong><?php echo  $ol->study_center; ?></strong>
						</td>
					</tr>
                     <tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
                    <tr>
						<td align="left">GRADE :
						</td>
						<td align="left"><strong><?php echo  $ol->grade; ?></strong>
						</td>
					</tr>
                     <tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
                    <tr>
						<td align="left">COURSE :
						</td>
						<td align="left"><strong><?php echo  $ol->course; ?></strong>
						</td>
					</tr>
                     <tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
                    <tr>
						<td align="left">GENDER :
						</td>
						<td align="left"><strong><?php echo  $ol->gender; ?></strong>
						</td>
					</tr>
                     <tr>
			<td align="center" colspan="2">&nbsp;</td>						
					</tr
					
					
				></table>
            
				<?php 
				}
				
				}  ?>
                </div>
        <!-- END MAIN CONTENT -->
         <!-- FOOTER -->
        <div id="outerfooter">
        	<div id="footercontainer">
            	<footer id="footer">Copyright &copy;2012 Uma electronics institute. All Rights Reserved .</footer>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
        <div class="clear"></div>
	</div> <!-- end outercontainer -->
    
</div> <!-- end bodychild -->

<!-- Javascript
================================================== -->
<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
<!-- jQuery Superfish -->
<script type="text/javascript" src="js/hoverIntent.js"></script> 
<script type="text/javascript" src="js/superfish.js"></script> 
<script type="text/javascript" src="js/supersubs.js"></script>

<!-- jQuery PrettyPhoto -->
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>

<!-- jQuery PrettyPhoto Config -->
<script type="text/javascript" src="js/fade.js"></script>

<!-- Custom Script -->
<script type="text/javascript" src="js/custom.js"></script>

</body>


</html>
