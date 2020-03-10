<?php
session_start();
include("dbconnect.php");
$username=$_SESSION['username'];
$college_faculty=mysql_real_escape_string(strtoupper($_POST['college_faculty']));
$school=mysql_real_escape_string(strtoupper($_POST['school']));

$quer=mysql_query("select * from college_faculty where college_faculty='$college_faculty' and school='$school'");
$result=mysql_fetch_array($quer);
$validate=mysql_num_rows($quer);
if ($validate!=0){
	$error1="College or Faculty already EXIST";
}

else{
if ($_POST['submit'] && trim($college_faculty)!="" && trim($school)!=""){
$quer=mysql_query("INSERT into college_faculty(school,college_faculty) VALUES('$school','$college_faculty')");
if ($quer==1){
	$message= "Registration Successful";
}else{
	
	$error="Failed";
}	
}
}
$query=mysql_query("SELECT * from school");
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
				  <p><?php echo $message.$error.$error1;?></p>
					    <form method="post" action="">
					    	<div>
						    	<span><label>Select School</label></span>
						    	<span><select name="school">
								<?php 
							while($row=mysql_fetch_array($query)){
							?>
								<option><?php echo $row['school'];?></option>
								<?}?>
								</select></span>
								
						    </div>
							<div class="clear"></div>
							<div>
						    	<span><label>Enter College or Faculty</label></span>
						    	<span><input name="college_faculty" type="text" class="textbox"></span>
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
					<li><a href="course.php">Courses Entry</a></li>
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


