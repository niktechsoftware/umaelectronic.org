<!DOCTYPE html>

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

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->

</head>

<body>
<div id="bodychild">
	<div id="outercontainer">
     <!-- HEADER -->
       <?php include"header.php" ?>
        <!-- END HEADER -->
       <!-- SLIDER -->
        <div id="outerslider">
        	<div id="slidercontainer">
                <section id="slider">

                    <div id="feature_gallery">
                          <div class="bigimg">
               <img src="images/content/slide1.jpg" alt="" class="change"  />
     <div class="slidedesc">Boost your career and add feather to your future with the knowledge and training of modern magic "computers".</div>
                          </div>
                          <div class="bigimg">
                              <img src="images/content/slide2.jpg" alt="" class="change"  />
    <div class="slidedesc">A Complete Electronics Refrigeration,Computer And Telecommunication &amp; Institude.</div>
                          </div>
                      <div class="bigimg">
                    <img src="images/content/slide3.jpg" alt="" class="change"  />
 <div class="slidedesc">A language is a systematic means of communication by the use of sounds or conventional symbols.</div>
                          </div>
                          <div class="bigimg">
                              <img src="images/content/slide4.jpg" alt="" class="change"  />
       <div class="slidedesc">The mobile phone is every once hand held device now a days. Brighter in your career with mobile repairing courses.</div>
                          </div>
                          <div class="bigimg">
                              <img src="images/content/slide5.jpg" alt="" class="change"  />
           <div class="slidedesc">There are emmense possibilties in the field of refrigeration and we provide you world class training and service of it.</div> 
                          </div>
                          <div class="bigimg">
                              <img src="images/content/computer-networking-technology.jpg" alt="" class="change"  />
                     <div class="slidedesc">Networking course gives students the ability and understanding necessary to create and administer a network. The course teaches the student how to physically connect computers and other devices to a network and access peripherals.</div>
                  </div>
                    </div>
                    <div id="pager-container">
                     	<a href="#" id="mycarousel-prev"></a>
                         <a href="#" id="mycarousel-next"></a>                     
                    </div>
 
                </section>
            </div>
        </div>
        <!-- END SLIDER -->
        
        <!-- BEFORE CONTENT -->
        <div id="outerbeforecontent">
        	<div id="beforecontent">
            	<section id="beforethecontent">
					<div class="box">
                      <h3>Uma Computer Electronic Institute</h3>
                     
                          <a href="index.php"><img src="images/uma-electron1.png" alt=""></a>
                </div>
                    <div class="box">
                   	  <h3>Uma Electronic Institute</h3>
                <a href="index.php"><img src="images/uma-electron2.png" alt=""></a>
                    </div>
                    <div class="box last">
                      <h3>Idea Technical Institute</h3>
        <a href="index.php"><img src="images/uma-electron3.png" alt=""></a>
                    </div>
                    <div class="clear"></div>
                </section>
            </div>
        </div>
        <!-- END BEFORE CONTENT -->
        
        <!-- MAIN CONTENT -->
        <div id="outermain">
        	<div id="maincontent">
        	<section id="mainthecontent">
            
				<article>
<style type="text/css">
.myButton1 {
	-moz-box-shadow: 0px 0px 0px 0px #8a2a21;
	-webkit-box-shadow: 0px 0px 0px 0px #8a2a21;
	box-shadow: 0px 0px 0px 0px #8a2a21;
	background-color:#c62d1f;
	border:1px solid #d02718;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:20px;
	font-weight:bold;
	padding:15px 25px;
	text-decoration:none;
}
.myButton1:hover {
	background-color:#f24437;
}
.myButton1:active {
	position:relative;
	top:1px;
}
</style>
            <h1>Welcome to Uma Electronics Institute</h1>
<p class="colortext">Education is the most powerful weapon which you can use to change the world.</p>
<p>Uma Computer Electronics Institute believes education is a continuous process of learning. The Institute prepares students with the needed skills sought by today's society. At Uma, we emphasize creativity, productivity, and innovation. We make sure that these qualities are incorporated in all the subjects and programs we teach: All Computer Courses, English as a second language.</p>

<p>We deliver quality training to those who work or seek to work in the commercial, institutional, governmental, diplomatic, and international arenas</p>
	<div class="alignright" style="padding:10px 30px 10px 50px; border:1px solid #C03;">
                    	<img src="images/content/varification.png" /><br />
                    	<form method="post" action="c_verification.php">
                       
                            <input type="text" name="enroll" size="22" style="border:1px solid #C03;" /><br /><br />
                           <p> Enter Your Roll Number Above</p>
                            <input type="submit" class="myButton1" value="Certificate Verification" />
                        </form>
                  </div>

                 <aside style="width:600px;">
        <h1> Letest News</h1>
        <!-- begin sidebar -->
         <marquee direction="up" height="250" scrollamount="2" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);">
                    <?php 
						include_once"db.php";
						$news = 'select * from news';
						$result1 = mysql_query($news);
						while($row = mysql_fetch_array($result1))
						{
							?>
                            	<strong><h2><?php echo $row['title']; ?></h2></strong><br />
                                <p><?php echo $row['detail']; ?></p>
                       <strong style="float:right;"><a href="<?php echo $row['url']; ?>"><?php echo $row['url']; ?></a></strong>
                            <?php
						}
					?>
                    </marquee>     
        </aside>
        <!-- end sidebar -->
    </section>
    <!-- END ARTICLE LIST + SIDEBAR -->
              <h2>CHECK OUT OUR PARTENER UNIVERSITIES</h2>
				<iframe src="slider2.php" width="100%" height="200"></iframe>	
               
                <div class="clear"></div>
            </section>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
         <!-- FOOTER -->
        <div id="outerfooter">
        	<div id="footercontainer">
            	<footer id="footer">Copyright &copy;2012 Uma electronics institute. All Rights Reserved .</footer>
            </div>
        </div>
        <!-- END FOOTER -->
        <div class="clear">
        </div>
	    </div>
     <!-- end outercontainer -->
    
     </div> 
<!-- end bodychild -->



<!-- Javascript
================================================== -->
<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
<!-- jQuery Superfish -->
<script type="text/javascript" src="js/hoverIntent.js"></script> 
<script type="text/javascript" src="js/superfish.js"></script> 
<script type="text/javascript" src="js/supersubs.js"></script>

<!-- Custom Script -->
<script type="text/javascript" src="js/custom.js"></script>

<!-- Slider -->
<script type="text/javascript" src="js/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="js/gallery.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>


</body>

</html>