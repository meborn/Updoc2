<!DOCTYPE html>
<html>
	<head>
		<title>Upholstery Doctor | Automotive & Furniture Upholstery</title>
		<meta charset="utf-8">
  		<meta name="viewport" content= "initial-scale=1">
  		<meta name="description" content="Upholstery Doctor offers upholstery and repair services in St. George, Utah and surrounding areas. Upholstery services include automotive, furniture, ATVs, RVs, boats, and more.">
  		<link rel="stylesheet" href="style/style.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="style/index.css" type="text/css" media="all"/>
		<link rel="icon" type="image/png" href="images/favicon.png">
		<!-- google -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-56769748-1', 'auto');
		  ga('send', 'pageview');

		</script>
	</head>
	<body>
		<?php $page = 'Home' ?>
		<div id="container">
			<div id="header-container">
				<?php include('includes/header.php'); ?>
				<div id="home-intro">
					<img id="header-img" src="images/index/home-page-photo.jpg" alt="The Doctor Will See Your Now">
					<div id="home-intro-text">
						<h1>THE DOCTOR WILL</h1>
						<h1>SEE YOU NOW</h1>
						<h2>Upholstery & Repair</h2>
					</div>
					<div id="home-intro-links">
						<a href="services.php#furniture">
							<img src="images/index/residential-icon.png" alt="residential services icon">
						</a>
						<a href="services.php">
							<div class="circle">
								<img src="images/index/auto-icon.png" alt="automotive services icon">
							</div>
						</a>
						<a href="about.php">
							<span>Learn<br>More</span>
						</a>
					</div>
				</div>
			</div>
			<div id="content-container">
				<?php include('includes/decor.php'); ?>
				<div id="content">
					<div id="home-left">
						<div id="video-wrapper">
						 	<iframe width="560" height="315" src="//www.youtube.com/embed/2KAQ8_PnLR0?rel=0" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<div id="home-right">
						<a href="gallery.php">See More</a>
					</div>
				</div>
			</div>
			<div id="footer-container">
				<?php include('includes/footer.php'); ?>
			</div>
			<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
			<script src="js/mobile-menu.js"></script>
		</div>
		<?php include('includes/mobile-menu.php'); ?>
	</body>
</html>