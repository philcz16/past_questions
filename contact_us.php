<?php
include("dbconnect.php");

$username=$_POST['username'];
$useremail=$_POST['useremail'];
$userphone=$_POST['userphone'];
$usermessage=$_POST['usermessage'];
if (($_POST['submit']) && (trim($username)!=="")&& (trim($useremail)!=="") || (trim($userphone)!=="")&& (trim($usermessage)!=="")){
	$query=mysql_query("INSERT into contact_us(username,useremail,userphone,usermessage,time) VALUES('$username','$useremail','$userphone','$usermessage',NOW())");
	if ($query==1){
		$message="Your Message has been sent we will reply you shortly";
	}
	else{
		$error="There was an error sending your message please RETRY";
	}
}





?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact_Us|Myscholar.com.ng</title>
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
							<li class="active"><a href="#">Contact</a></li>
							<li><a href="download.html">Downloads</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
					
					<div class="clear"> </div>
					<!---End-top-nav---->
				
			</div>
			<!---End-header----->
			
			<div class="content">
		 	<!---start-contact----->
		 	<div class="contact">
		 		<div class="wrap">
				<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		
      				</div>
      			<div class="company_address">
				     	<h3>Our Address:</h3>
						    	<p>Uni-Agric Makurdi Multipurpose</p>
						   		<p>Opposite Coke Villa Hostel Road</p>
						   		<p>University of Agriculture.</p>
				   		<p>Phone Us on:</p>
						<ul>
						<li>08136746797</li>
						<li>08101807411</li>
						</ul>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
					<?php echo $message.$error?>
					    <form method="post" action="">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="username" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="useremail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="userphone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="usermessage"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit" name="submit"></span>
						  </div>
					    </form>

				    </div>
  				</div>				
			  </div>
			</div>
			</div>
		 	<!---End-contact----->
				<div class="bottom-grids">
		 		<div class="wrap">
		 		<div class="social-links">
		 			<ul>
		 				<li><a href="http://www.facebook.com">Facebook <img src="images/facebook.png"></a></li>
		 				<li><a href="http://www.twitter.com">Twitter <img src="images/twitter.png"></a></li>
		 				<li><a href="http://www.google.com">Google+ <img src="images/google.png"></a></li>
		 				<li><a href="http://www.linkedin.com">Linkedin <img src="images/feed.png"></a></li>
						<li><a href="http://www.youtube.com">Youtube <img src="images/youtube.png"></a></li>
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
	
	<script src="js/menu.js"></script>
</body>
</html>
