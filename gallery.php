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
            	<h1 class="pagetitle">Gallery</h1><div id="breadcrumb">You are here: <a href="index.php">Home</a>  /  Gallery</div>
                
                
                
                 <!-- 1st portfolio item -->
            
		<!-- END PORTFOLIO CONTENT -->
    </section><!-- END WRAP -->
                <ul class="ts-gallery-col4">
                <?php 
				include_once"db.php";
				$gal = mysql_query("select * from sel_student"); 
				$number = mysql_num_rows($gal);
				if($number > 0)
				{
					while($res = mysql_fetch_object($gal))
					{
				?>
                    <li>
                        <div class="ts-gallery-img">
                            <a title="" data-rel="prettyPhoto[mixed]" href="umaadmin/stu_image/<?php echo $res->image; ?>" class="image">
                            <span class="rollover"></span>
                            <img class="scale-with-grid" alt="" src="umaadmin/stu_image/<?php echo $res->image; ?>"></a>
                        </div>
                            <div class="ts-gallery-text ">
                            	<h2><?php echo $res->stu_name; ?></h2>
                            </div>
                            <div class="ts-gallery-clear"></div>
                    </li>
                 <?php } 
				}
				else
				{?>
                	<li style="width:300px;">
                        <h1 style="color:#F00;">No Record Found !</h1>
                    </li>
                 <?php } ?>
                    <li class="ts-gallery-clear"></li>
                </ul>
                            
                <div class="clear"></div>
            </section>
            </div>
        </div>
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

<!-- jQuery PrettyPhoto -->
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>

<!-- jQuery PrettyPhoto Config -->
<script type="text/javascript" src="js/fade.js"></script>

<!-- Custom Script -->
<script type="text/javascript" src="js/custom.js"></script>

</body>

</html>
