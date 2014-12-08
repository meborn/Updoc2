<!DOCTYPE html>
<html>
	<head>
		<title>Services | Upholstery Doctor</title>
		<meta charset="utf-8">
  		<meta name="viewport" content= "initial-scale=1">

		<link rel="stylesheet" href="style/services.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="style/style.css" type="text/css" media="all"/>
	</head>
	<body>
		<?php $page = 'Services' ?>
		<div id="container">
			<div id="header-container">
				<?php include('includes/header.php'); ?>
				<div id="header-intro">

				</div>
			</div>
			<div id="content-container">
				<div id="content">
					<div id="auto" class="service">
						<h1>Automotive</h1>
						<div class="service-left" >
							<div class="service-img">
								<span class="service-state" id="auto-state">
									Before
								</span>
								<img src="images/services/auto-before.jpg" alt="before picture of automobile" >
								<div class="state-btn-container">
									<span id="auto-state-before" class="state-btn">
										Before
									</span>
									<span id="auto-state-after" class="state-btn">
										After
									</span>
								</div>
							</div>
							
						</div>
						<div class="service-right">
							<ul>
								<li><span>Leather/Fabric Repairs</span></li>
								<li><span>Custom Interiors</span></li>
								<li><span>Factory Seat Covers</span></li>
								<li><span>Seat Heaters</span></li>
								<li><span>Convertiable Tops</span></li>
								<li><span>ATVs</span></li>
								<li><span>RVs</span></li>
								<li><span>Boats</span></li>
							</ul>
							
						</div>
						<a href="gallery.php" class="services-link">Our Work</a>
					</div>
					<div id="furniture" class="service">
						<h1>Furniture</h1>
						<div class="service-left" >
							<div class="service-img">
								<span class="service-state" id="furniture-state">
									Before
								</span>
								<img src="images/services/chair-before.jpg" alt="before picture of automobile" >
								<div class="state-btn-container">
									<span id="furniture-state-before" class="state-btn">
										Before
									</span>
									<span id="furniture-state-after" class="state-btn">
										After
									</span>
								</div>
							</div>
						</div>
						<div class="service-right">
							<ul>
								<li><span>Leather/Fabric Repairs</span></li>
								<li><span>Custom Upholstery</span></li>
								<li><span>Custom Furniture</span></li>
								<li><span>Seat Cushions</span></li>
								<li><span>Furniture Repair</span></li>
								<li><span>Slip Covers</span></li>
								<li><span>Pillows</span></li>
							</ul>
							
						</div>
						<a href="gallery.php" class="services-link">Our Work</a>
					</div>
				</div>
			</div>
			<div id="footer-container">
				<?php include('includes/footer.php'); ?>
			</div>
			<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
			<script src="js/mobile-menu.js"></script>
			<script src="js/services.js"></script>
		</div>
		<?php include('includes/mobile-menu.php'); ?>
	</body>
</html>