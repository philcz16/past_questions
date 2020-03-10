<?php
session_start();
include("dbconnect.php");
$department=$_GET['department'];
$query=mysql_query("select * from courses where department='$department'");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Course Click on past question to download|Myscholar.com.ng</title>
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
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="contact_us.php">Contact</a></li>
							<li><a href="download.html">Downloads</a></li>
						</ul>
					</div>
					
					<div class="clear"> </div>
					<!---End-top-nav---->
				
			</div>
			<!---End-header----->
	
	<div class="content">
	
	<?php if (($_GET['department']=='CHEMISTRY')||($_GET['department']=='BIOLOGICAL SCIENCES') || ($_GET['department']=='PHYSICS') ||
		($_GET['department']=='MATHEMATICS STATISTICS COMPUTER SCIENCE') ||($_GET['department']=='EDUCATIONAL FOUNDATIONS')||
		($_GET['department']=='SCIENCE EDUCATION')||($_GET['department']=='HOME SCIENCE AND MANAGEMENT')||($_GET['department']=='BUSINESS ADMINISTRATION')
		||($_GET['department']=='ACCOUNTING AND FINANCE')){
		?>
		 	<div class="mid-grids-level">
		 		<div class="wrap">
				<div class="mid-grid-level">
						<h4>100 Level</h4>
						<?php
				$query=mysql_query("select * from courses where department='$department' and level=100");
				while($row=mysql_fetch_array($query)){
				?>
				<p><a href="download/Upload/<?php echo $row['course'].'.pdf';?>" download><?php echo $row['course'];?></a></p>
				<?php }?>
			 			</div>
			 		<div class="mid-grid-level">
						<h4>200 Level</h4>
						<?php
				$query=mysql_query("select * from courses where department='$department' and level=200");
				while($row=mysql_fetch_array($query)){
				?>
				<p><a href="download/Upload/<?php echo $row['file'];?>" download><?php echo $row['course'];?></a></p>
				<?php }?>
			 			</div>
			 		<div class="mid-grid-level">
						<h4>300 Level</h4>
						<?php
				$query=mysql_query("select * from courses where department='$department' and level=300");
				while($row=mysql_fetch_array($query)){
				?>
				<p><a href="download/Upload/<?php echo $row['file'];?>" download><?php echo $row['course'];?></a></p>
				<?php }?>
			 			</div>
						<div class="mid-grid-level">
						<h4>400 Level</h4>
						<?php
				$query=mysql_query("select * from courses where department='$department' and level=400");
				while($row=mysql_fetch_array($query)){
				?>
				<p><a href="download/Upload/<?php echo $row['file'];?>" download><?php echo $row['course'];?></a></p>
				<?php }?>
			 			</div>
	<?php }
	
	
	
	else if (($_GET['department']=='VETERINARY MEDICINE')){
	?>
	
	<div class="mid-grids-six">
		 		<div class="wrap">
				<div class="mid-grid-six">
						<h4>100 Level</h4>
						<?php
				$query=mysql_query("select * from courses where department='$department' and level=100");
				while($row=mysql_fetch_array($query)){
				?>
				<p><a href="download/Upload/<?php echo $row['file'];?>" download><?php echo $row['course'];?></a></p>
				<?php }?>
			 			</div>
			 		<div class="mid-grid-six">
						<h4>200 Level</h4>
						<?php
				$query=mysql_query("select * from courses where department='$department' and level=200");
				while($row=mysql_fetch_array($query)){
				?>
				<p><a href="download/Upload/<?php echo $row['file'];?>" download><?php echo $row['course'];?></a></p>
				<?php }?>
			 			</div>
			 		<div class="mid-grid-six">
						<h4>300 Level</h4>
						<?php
				$query=mysql_query("select * from courses where department='$department' and level=300");
				while($row=mysql_fetch_array($query)){
				?>
				<p><a href="download/Upload/<?php echo $row['file'];?>" download><?php echo $row['course'];?></a></p>
				<?php }?>
			 			</div>
						<div class="mid-grid-six">
						<h4>400 Level</h4>
						<?php
				$query=mysql_query("select * from courses where department='$department' and level=400");
				while($row=mysql_fetch_array($query)){
				?>
				<p><a href="download/Upload/<?php echo $row['file'];?>" download><?php echo $row['course'];?></a></p>
				<?php }?>
			 			</div>
						<div class="mid-grid-six">
						<h4>500 Level</h4>
						<?php
				$query=mysql_query("select * from courses where department='$department' and level=500");
				while($row=mysql_fetch_array($query)){
				?>
				<p><a href="download/Upload/<?php echo $row['file'];?>" download><?php echo $row['course'];?></a></p>
				<?php }?>
			 			</div>
						<div class="mid-grid-six">
						<h4>600 Level</h4>
						<?php
				$query=mysql_query("select * from courses where department='$department' and level=600");
				while($row=mysql_fetch_array($query)){
				?>
				<p><a href="download/Upload/<?php echo $row['file'];?>" download><?php echo $row['course'];?></a></p>
				<?php }?>
			 			</div>
	<?php }
	
	else{
	?>
	
	<div class="mid-grids-five">
		 		<div class="wrap">
				<div class="mid-grid-five">
						<h4>100 Level</h4>
						<?php
				$query=mysql_query("select * from courses where department='$department' and level=100");
				while($row=mysql_fetch_array($query)){
				?>
				<p><a href="download/Upload/<?php echo $row['course'].'.pdf';?>" download><?php echo $row['course'];?></a></p>
				<?php }?>
			 			</div>
			 		<div class="mid-grid-five">
						<h4>200 Level</h4>
						<?php
				$query=mysql_query("select * from courses where department='$department' and level=200");
				while($row=mysql_fetch_array($query)){
				?>
				<p><a href="download/Upload/<?php echo $row['file'];?>" download><?php echo $row['course'];?></a></p>
				<?php }?>
			 			</div>
			 		<div class="mid-grid-five">
						<h4>300 Level</h4>
						<?php
				$query=mysql_query("select * from courses where department='$department' and level=300");
				while($row=mysql_fetch_array($query)){
				?>
				<p><a href="download/Upload/<?php echo $row['file'];?>" download><?php echo $row['course'];?></a></p>
				<?php }?>
			 			</div>
						<div class="mid-grid-five">
						<h4>400 Level</h4>
						<?php
				$query=mysql_query("select * from courses where department='$department' and level=400");
				while($row=mysql_fetch_array($query)){
				?>
				<p><a href="download/Upload/<?php echo $row['file'];?>" download><?php echo $row['course'];?></a></p>
				<?php }?>
			 			</div>
						<div class="mid-grid-five">
						<h4>500 Level</h4>
						<?php
				$query=mysql_query("select * from courses where department='$department' and level=500");
				while($row=mysql_fetch_array($query)){
				?>
				<p><a href="download/Upload/<?php echo $row['file'];?>" download><?php echo $row['course'];?></a></p>
				<?php }?>
			 			</div>
	<?php }?>
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