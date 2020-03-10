<?php
session_start();
$username=$_SESSION['username'];
include("dbconnect.php");
$school=mysql_real_escape_string($_POST['school']);

$quer=mysql_query("select * from school where school='$school'");
$result=mysql_fetch_array($quer);
$validate=mysql_num_rows($quer);
if ($validate!=0){
	$error1="School already EXIST";
}

else{ 
if (($_POST['submit']) && trim($school)!==""){
$query=mysql_query("INSERT into school(school) VALUES('$school')");
if ($query==1){
	$message= "Registration Successful";
}else{
	
	$error="Failed";
}	
}
}
if (!($_SESSION['username'])){
	
	header("location:login.php");
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
				
						<a href="admin_home.php"><img src="../images/logo.jpg" title="logo" /></a>
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
							<li class="active"><a href="admin_home.php">Home</a></li>
							<li><a href="advert.php">Advert</a></li>
							<li><a href="logout.php">Logout</a></li>
							<div class="clear"> </div>
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
			 			<div id="aside">
						<div class="col span_2_of_3">
				  <div class="contact-form">
					    <form method="post" action="">
						<p><?php echo $error.$message.$error1; ?></p>
					    	<div>
						    	<span><label>Enter School</label></span>
						    	<span><input name="school" type="text" class="textbox"></span>
						    </div>
							<div>
						   		<span><input type="submit" value="Submit" name="submit"></span>
						  </div>
						  </form>
						</div>
			 	</div>
				</div>
				</div>
			 		<div class="mid-grid">
			 			<div id="aside">

						<h2>Quick Search</h2>
					<ul>
					<li><a href="school.php">School Entry</a></li>
					<li><a href="college_faculty.php">College/Faculty Entry</a></li>
					<li><a href="department.php">Department Entry</a></li>
					<li><a href="course.php">Course Entry</a></li>
					<li><a href="upload.php">Upload Past Questions</a></li>
					</ul>
						</div>
			 	</div>
			 		<div class="mid-grid">
			 			<h3>Our Mission</h3>
			 			<a href="#"><img src="../images/3.jpg" title="spares" /></a>
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
		 			<p>Copyright (C) Myscholar.com.ng Designed by Philcz</p>
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


