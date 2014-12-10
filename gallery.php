<!DOCTYPE html>
<html>
	<head>
		<title>Gallery | Upholstery Doctor</title>
		<meta charset="utf-8">
  		<meta name="viewport" content= "initial-scale=1">

		<link rel="stylesheet" href="style/gallery.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="style/style.css" type="text/css" media="all"/>
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
		<?php $page = 'Gallery' ?>
		<div id="container">
			<div id="header-container">
				<?php include('includes/header.php'); ?>
				<div id="header-intro">
					<h1>Our Work.</h1>
				</div>
			</div>
			<div id="content-container">
				<?php include('includes/decor.php'); ?>
				<div id="content">
					<div class="gallery-btn" id="gallery-repair">
						<img src="images/gallery/repair/repair-xs.jpg" alt="gallery image repair">
						<h2>Repairs</h2>
					</div>
					<div class="gallery-btn" id="gallery-chevy">
						<img src="images/gallery/chevy/chevy-xs.jpg" alt="gallery image 36 chevy" >
						<h2>36 Chevy</h2>
					</div>
					<div class="gallery-btn" id="gallery-recover">
						<img src="images/gallery/recover/recover-xs.jpg" alt="gallery image recovers" >
						<h2>Recover</h2>
					</div>
					<div class="gallery-btn" id="gallery-boat">
						<img src="images/gallery/boat/boat-xs.jpg" alt="gallery image boats">
						<h2>Boats</h2>
					</div>
					<div class="gallery-btn" id="gallery-furniture">
						<img src="images/gallery/furniture/furniture-xs.jpg" alt="gallery image furniture">
						<h2>Furniture</h2>
					</div>
					<div class="gallery-btn" id="gallery-custom">
						<img src="images/gallery/custom/custom-xs.jpg" alt="gallery image custom work" >
						<h2>Custom</h2>
					</div>
					<a href="https://www.facebook.com/pages/Upholstery-Doctor/115017815276162?sk=photos_stream" id="gallery-fb">Facebook Photos</a>
				</div>
			</div>
			<div id="footer-container">
				<?php include('includes/footer.php'); ?>
			</div>
			<div id="overlay">
			<div id="overlay-container">
				<div id="gallery">
						<div id="gallery-left">
							<div id="gallery-img-container">
							<!-- <img src="images/gallery/repair/repair-1.jpg"> -->
							</div>
							<div id="gallery-text">
								<p></p>
							</div>
							<div id="gallery-nav">
								<div class="gallery-nav-btn" id="gallery-prev">
									Back
								</div>
								<div class="gallery-nav-btn" id="gallery-next">
									Next
								</div>
							</div>
							
						</div>
						<div id="gallery-right">
							<div id="gallery-exit">
								x
							</div>
							<div id="gallery-thumb-container">

							</div>
						</div>
						
					</div>
			</div>
		</div>
			<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
			<script src="js/mobile-menu.js"></script>
			<script src="js/gallery.js"></script>
		</div>
		<?php include('includes/mobile-menu.php'); ?>
	</body>
</html>