<?php
include("admin/dbconnect.php");
$query=mysql_query("SELECT * from school order by school ASC");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Home|Myscholar.com.ng</title>
		<meta charset="utf-8">
		<meta name="viewport"  content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="stylesheet/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		  
			<script src="js/jquery-2.1.3.min.js"></script>
		  <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
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
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="contact_us.php">Contact</a></li>
							<li><a href="http://blog.myscholar.com.ng/blog">Blog</a></li>
							
							<div class="clear"> </div>
						</ul>
					</div>
					<div class="clear"> </div>
					<!---End-top-nav---->
				
			</div>
			<!---End-header----->
	<div class="content">
	<div id="section">
			<div class="select-school">
			<h3>Select School to download past question paper for <span>Free</span></h3>
			<ul>
			<?php 
			while($row=mysql_fetch_array($query)){
				
				?>
			<li><a href="college_faculty.php?school=<?php echo $row['school'];?>"><?php echo $row['school'];?></a></li>
			<?php }?>
			</ul>
			</div>
				</div>
			
		 	<div class="mid-grids">
		 		<div class="wrap">
			 		<div class="mid-grid_slide">
			 			<!----->
				<div class="slider1">	  
	  <div class="callbacks_container">
	      <ul class="rslides" id="slider1">
	         <li>
				 <img src="images/4.jpg" alt=""/>
				  <div class="caption caption1">
					<h2></h2>
				  </div>
	         </li>
	         
	         <li>
				 <img src="images/3.jpg" alt=""/>
				  <div class="caption caption1">
					<h2></h2>
				  </div>
	         </li>
	      </ul>	      
      </div>
</div>
	<script src="js/responsiveslides.min.js"></script>
	 <script>
		$(function () {
		  $("#slider1").responsiveSlides({
			auto: true,
			speed: 500,
			namespace: "callbacks",
			pager: true,
		  });
		});
	  </script>
	<!----->
			 		</div>
			 		<div class="mid-grid">
			 			<a href="#"><img src="images/3.jpg" title="myscholar.com.ng" /></a>
			 			<h4>Helping You Achieve Your Dreams</h4>
			 			<p>Myscholar.com.ng provides help to all students in Nigeria and beyond by providing online past questions to save students the stress of photocopying past questions. 
						</p>
			 		</div>
			 		<div class="mid-grid">
			 			<a href="#"><img src="images/6.jpg" title="myscholar.com.ng" /></a>
			 			<h4>Together We can Change Tomorrow</h4>
			 			<p>
						To be the best Online help for our esteem students by providing reliable and unique services to all students in Nigeria and beyond.
						</p>
			 		</div>
			 		<div class="clear"> </div>
					
		 		</div>
		 	</div>
		 	<div class="bottom-grids">
		 		<div class="wrap">
		 		<div class="social-links">
		 			<ul>
		 				<li><a href="http://www.facebook.com">Facebook <img src="images/facebook.png"></a></li>
		 				<li><a href="http://www.twitter.com">Twitter <img src="images/twitter.png"></a></li>
		 				<li><a href="http://www.google.com">Google+ <img src="images/google.png"></a></li>
		 				<li><a href="http://www.linkedin.com">Linkedin <img src="images/feed.png"></a></li>
						<li><a href="http://www.youtube.com">Youtube<img src="images/youtube.png"></a></li>
		 			</ul>
		 		</div>
		 	
		 		
		 		<div class="copy-right">
		 			<p>Myscholar.com.ng Copyright (C) 2017 privacy Terms and | conditions of use. Designed by <span class="fb">
		 			    <a href="https://www.google.com.ng/url?sa=t&rct=j&q=&esrc=s&source=web&cd=7&cad=rja&uact=8&ved=0ahUKEwj1wsu9ks7VAhVXFMAKHebtAL8QFgg8MAY&url=https%3A%2F%2Fwww.facebook.com%2Fpublic%2FTheophilus-Terpase-Philcz-Gagher&usg=AFQjCNF-jWUgzlrFDfDD6wFzUXMn84HEvg">Philcz</a></span></p>
		 		</div>
		 		<div class="top-to-page">
						<a href="#top" class="scroll"> </a>
						<div class="clear"> </div>
					</div>
		 	</div>
		 	</div>
		 </div>
		 <!---End-contnet---->
	
	<script src="js/menu.js"></script>
</body>
</html>


