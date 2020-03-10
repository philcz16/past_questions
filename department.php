<?php
session_start();
include("dbconnect.php");
$college_faculty=$_GET['college_faculty'];
$query=mysql_query("select * from department where college_faculty='$college_faculty'");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Department Select your department|Myscholar.com.ng</title>
		<meta charset="utf-8">
		<meta name="viewport"  content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="stylesheet/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href="stylesheet/slider.css" rel="stylesheet" type="text/css"  media="all" />
		  
			<script src="js/jquery-2.1.3.min.js"></script>
				
		 
		  <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4237799895137695",
    enable_page_level_ads: true
  });
</script>
	</head>
	<body>
		<!---start-wrap----->
		
			<!---start-header----->
			<div class="header"  id="top">
			
				<div class="wrap">
					<!---start-logo---->
					<div class="logo">
				
						<a href="index.php"><img src="images/logo.jpg" title="logo" /></a>
					</div>
					
					<div>
						<a href=""><h1 class="top-title">Myscholar.com.ng</h1></a>
					</div>
					</div>
					<!---End-logo---->
					<!---start-top-nav---->
					
						<div id="menu-hide">
						<p class="menu-left">Menu</p>
							<img src="images/menu-icon.png" id="menu">
						</div>
						
					<div class="top-nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="contact_us.php">Contact</a></li>
							<li><a href="download.html">Downloads</a></li>
						</ul>
					</div>
					
					<div class="clear"> </div>
					<!---End-top-nav---->
				
			</div>
			<!---End-header----->
			
	
	<div class="content">
		 	<div class="mid-grids">
		 		<div class="wrap">
				<div class="mid-grid">
						<h4>Select your Department</h4>
						<?php
				while($row=mysql_fetch_array($query)){
				?>
				<p><a href="course.php?department=<?php echo $row['department'];?>"><?php echo $row['department'];?></a></p>
				<?php }?>
			 			</div>
			 		<div class="mid-grid">
			 			<h3>Advert</h3>
			 			<a href="#"><img src="images/3.jpg" title="spares" /></a>
			 			<h4>Helping You Achieve Your Dreams</h4>
			 			<p>Scholar.com provides help to all students in Nigeria and beyond by providing online past questions to save students the stress of photocopying past questions. 
						They can easily have a pdf copy of the past questions in their phones, tablet and systems. In all departments of the various Universities.
						</p>
			 			<a class="button" href="#">More</a>
			 		</div>
			 		<div class="mid-grid">
			 			<h3>Advert</h3>
			 			<a href="#"><img src="images/6.jpg" title="spares" /></a>
			 			<h4>Helping You Achieve Your Dreams</h4>
			 			<p>Scholar.com provides help to all students in Nigeria and beyond by providing online past questions to save students the stress of photocopying past questions. 
						They can easily have a pdf copy of the past questions in their phones, tablet and systems. In all departments of the various Universities.
						</p>
			 			<a class="button" href="#">More</a>
			 		</div>
			 		<div class="clear"> </div>
		 		</div>
		 	</div>
	

	
		 	<div class="bottom-grids">
		 		<div class="wrap">
		 		<div class="social-links">
		 			<ul>
		 				<li><a href="http://www.facebook.com">Facebook <img src="../images/facebook.png"></a></li>
		 				<li><a href="http://www.twitter.com">Twitter <img src="../images/twitter.png"></a></li>
		 				<li><a href="http://www.google.com">Google+ <img src="../images/google.png"></a></li>
		 				<li><a href="http://www.linkedin.com">Linkedin <img src="../images/feed.png"></a></li>
						<li><a href="http://www.youtube.com">Youtube<img src="../images/youtube.png"></a></li>
		 			</ul>
		 		</div>
		 				 		
		 		<div class="copy-right">
		 			<p>Myscholar.com.ng Copyright (C) 2017 privacy Terms and | conditions of use. Designed by <span class="fb"><a href="https://web.facebook.com/?_rdc=1&_rdr">Philcz</a></span></p>
		 		</div>
		 		<div class="top-to-page">
						<a href="#top" class="scroll"> </a>
						<div class="clear"> </div>
					</div>
		 	</div>
		 	</div>
		 </div>
		 <!---End-contnet---->
	
	<script src="../js/menu.js"></script>
</body>
</html>


