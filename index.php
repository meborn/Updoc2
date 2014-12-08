<!DOCTYPE html>
<html>
	<head>
		<title>Upholstery Doctor</title>
		<meta charset="utf-8">
  		<meta name="viewport" content= "initial-scale=1">
  		<link rel="stylesheet" href="style/style.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="style/index.css" type="text/css" media="all"/>
		
	</head>
	<body>
		<?php $page = 'Home' ?>
		<div id="container">
			<div id="header-container">
				<?php include('includes/header.php'); ?>
				<div id="home-intro">
					<img id="header-img" src="images/index/home-page-photo.jpg">
					<div id="home-intro-text">
						<h1>THE DOCTOR WILL</h1>
						<h1>SEE YOU NOW</h1>
						<h2>Upholstery & Repair</h2>
					</div>
					<div id="home-intro-links">
						<a href="services.php#furniture">
							<img>
						</a>
						<a href="services.php">
							<div class="circle">
								<img>
							</div>
						</a>
						<a href="services.php">
							<div class="circle">
								<img>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div id="content-container">

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