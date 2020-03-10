<?php
include("dbconnect.php");
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$query=mysql_query("SELECT * from admin_reg");
$row=mysql_fetch_array($query);

if (($_POST['submit']) && trim($username)!=="" && trim($email)!==""){
$query=mysql_query("INSERT into admin_reg(username,email,password) VALUES('$username','$email','$password')");


if ($query==1){
	$message= "Registration Successful";
}else{
	
	$error1="Failed";
}
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Myscholar.com.ng</title>
		<link href="../stylesheet/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href="../stylesheet/slider.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="viewport"  content="width=device-width, initial-scale=1, maximum-scale=1">
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		  <script src="../js/jquery-2.1.3.min.js"></script>
		    <script type="text/javascript" src="../js/camera.min.js"></script>
				
		  </script>
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
		<!---strat-wrap----->
		
			<!---strat-header----->
			<div class="header"  id="top">
			
				<div class="wrap">
					<!---start-logo---->
					<div class="logo">
				
						<a href="../index.html"><img src="../images/logo.jpg" title="logo" /></a>
					</div>
					
					<div>
						<a href=""><h1 class="top-title">Myscholar.com.ng</h1></a>
					</div>
					</div>
					<!---End-logo---->
					<!---start-top-nav---->
					<div id="menu-hide">
					<p class="menu-left">Menu</p>
							<img src="../images/menu-icon.png" id="menu">
						</div>
					<div class="top-nav">
						<ul>
							<li><a href="../index.html">Home</a></li>
							<li><a href="../about.html">About</a></li>
							<li><a href="whatwe.html">What we do</a></li>
							<li class="active"><a href="login.php">Login</a></li>
							<li ><a href="contact.html">Contact</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
					<div class="clear"> </div>
					<!---End-top-nav---->
				
			</div>
			<!---End-header----->
		 <!---start-content---->
		 <div class="content">
		 	<!---start-contact----->
		 	<div class="contact">
		 		<div class="wrap">
				<div class="section group">				
				<div class="col span_1_of_3">
					
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>new member Registration</h3>
					<p class="message"><?php echo $message.' '.$error.' '.$error1;?></p>
					    <form method="post" action="">
					    	<div>
						    	<span><label>USERNAME</label></span>
						    	<span><input name="username" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>EMAIL</label></span>
						    	<span><input name="email" type="text" class="textbox"></span>
						    </div>
							<div>
						    	<span><label>PASSWORD</label></span>
						    	<span><input name="password" type="password" class="textbox"></span>
						    </div>
						   
						   <div>
						   		<span><input type="submit" value="Submit" name="submit"></span>
						  </div>
					    </form>
						
						<p>Already Member? <a href="login.php">Click to Login</a></p>

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
		 				<li><a href="http://www.facebook.com">Facebook <img src="../images/facebook.png"></a></li>
		 				<li><a href="http://www.twitter.com">Twitter <img src="../images/twitter.png"></a></li>
		 				<li><a href="http://www.google.com">Google+ <img src="../images/google.png"></a></li>
		 				<li><a href="http://www.linkedin.com">Linkedin <img src="../images/feed.png"></a></li>
						<li><a href="http://www.youtube.com">Youtube<img src="../images/youtube.png"></a></li>
		 			</ul>
		 		</div>
		 		<div class="copy-right">
		 			<p>Copyright (C) Designed by Philcz</p>
		 		</div>
		 		<div class="top-to-page">
						<a href="#top" class="scroll"> </a>
						<div class="clear"> </div>
					</div>
		 	</div>
		 	</div>
		 </div>
		 <!---End-contnet---->
		</div>
		<!---End-wrap----->
		<script src="../js/menu.js"></script>
	</body>
</html>

