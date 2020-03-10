<?php
session_start();
include("dbconnect.php");
$username=$_SESSION['username'];
$name=$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
$size=$_FILES['file']['size'];
$type=$_FILES['file']['type'];
$extension=strtolower(substr($name,strpos($name,'.') + 1));
$max_size=4194304;
$course=$_POST['course'];

if (isset($name)){
if (!empty($name)){
	if (($extension=='pdf' || $extension=='jpeg') && $type=='image/jpeg'|| $type='application/pdf' && $size<=$max_size){
 $location='../download/Upload/';
$url=$_FILES['file']['name'];
move_uploaded_file($tmp_name,$location.$name);
	if  ($_POST['submit']){
		$query=mysql_query("UPDATE courses set file='$url', file_type='$type' WHERE course='$course'");
		if ($query==1){
		$message= 'Uploaded';
		} else
		{
		$error= 'There was an error';	
		}
	}
	}		
else{
	$error1= 'File must be a jpeg/jpeg and must be less than 2mb ';
}
}	
}

$query=mysql_query("SELECT * from courses");
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
				  <p><?php echo $message.$error.$error1;?></p>
					    <form method="post" action="" enctype="multipart/form-data">
					    	<div>
						    	<span><label>Course</span>
						    	<span><select name="course">
								<?php 
							while($row=mysql_fetch_array($query)){
							?>
								<option><?php echo $row['course'];?></option>
								<?}?>
								</select></span>
								
						    </div>
							<div class="clear"></div>
							<div>
						    	<input type="file" name="file">
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
					<li><a href="upload.php">Upload</a></li>
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