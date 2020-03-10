<?php
session_start();
include("dbconnect.php");
$message="";
if(count($_POST)>0) {

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$result = mysql_query("SELECT * FROM admin_reg WHERE email='". $_POST["email"]."' or username='". $_POST["username"]."' and password = '".$_POST["password"]."'") or die(mysql_errno);
$row  = mysql_fetch_array($result);
if(is_array($row)) {	
$_SESSION["username"] = $row['username'];
$_SESSION["email"]=$row['email'];
$_SESSION['id']=$row['id'];  
} else {
$message = "Invalid username or Password";
}
}

if (isset($_SESSION['username'])){ 
		header("Location:admin_home.php");
}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Home|Myscholar.com.ng</title>
		<meta charset="utf-8">
		<meta name="viewport"  content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="../stylesheet/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href="../stylesheet/slider.css" rel="stylesheet" type="text/css"  media="all" />
		  
			<script src="../js/jquery-2.1.3.min.js"></script>
				
		 
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
				
						<a href="index.html"><img src="../images/logo.jpg" title="logo" /></a>
					</div>
					
					<div>
						<a href=""><h1 class="top-title">Scholar.com</h1></a>
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
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="">About</a></li>
							<li><a href="../contact-us.html">Contact</a></li>
							<li><a href="../download.html">Downloads</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
					
					<div class="clear"> </div>
					<!---End-top-nav---->
				
			</div>
			<!---End-header----->
			
	
	<div class="contact">
		 		<div class="wrap">
				<div class="section group">				
				<div class="col span_1_of_3">
					
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Member Login Details</h3>
					<?php echo $message;?>
					    <form method="post" action="">
					    	<div>
						    	<span><label>USERNAME/EMAIL</label></span>
						    	<span><input name="username" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>PASSWORD</label></span>
						    	<span><input name="password" type="password" class="textbox"></span>
						    </div>
						   
						   <div>
						   		<span><input type="submit" value="Submit" name="submit"></span>
						  </div>
					    </form>
						
						<p>Not yet a Member? <a href="account.php">New Account</a></p>

				    </div>
  				</div>				
			  </div>
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
		 			<p>Copyright (C) Myscholar.com.ng privacy Terms and | conditions of use. Design by Philcz</p>
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


