<!DOCTYPE html>
<html>
	<head>
		<title>Upholstery Doctor</title>
		<meta charset="utf-8">
  		<meta name="viewport" content= "initial-scale=1">
  		
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
						<a href="gallery.php">
							<span>Our<br>Work</span>
						</a>
					</div>
					<div id="home-intro-decor">
						<span></span>
						<img src="images/index/scissors.png" alt="scissors icon" >
					</div>
				</div>
			</div>
			<div id="content-container">
				<div id="content">
					<div id="content-left">
						 <div id="video-wrapper">
						 	<iframe width="560" height="315" src="//www.youtube.com/embed/VTE0Mfb-hCY?rel=0" frameborder="0" allowfullscreen></iframe>
						</div>
						<p><span>Upholstery Doctor</span> has been providing quality upholstery services since 2005. However, the doctor and his staff have more than 20 years of experience in the industry. We provide repair, re-upholstery, and custom work on furniture, automobiles, boats, ATVs, and RVs. We guarantee quality, honesty, and excellent customer service.</p>
						<h3>(435)705-0675</h3>
						<div id="contact-type">
							<span>Call</span>
							<img src="images/dot.png" alt="dot">
							<span>Click</span>
							<img src="images/dot.png" alt="dot">
							<span>Text</span>
						</div>
						<a href="contact.php">Contact Us</a>
					</div>
					<div id="content-right">
						<h4>What Do Our Customers Say?</h4>
						<div class="testimonial">
							<p>Reliable, excellent quality and quick turnaround. Very happy with the finished product and friendliness of the staff! What more can you ask for?</p>
							<div class="rating">
								<span>Customer Service</span>
								<img src="images/index/stars.png" alt="stars rating">
								
							</div>
						</div>
						<div class="testimonial">
							<p>Having been in the car business for 30 years it is refreshing to have good quality upholstery repair facility in St. George. Brandon and his staff have done an outstanding job with replacing and repairing my vehicles in a timely manner and fair price. Their work is top quailty.</p>
							<div class="rating">
								<span>Quality</span>
								<img src="images/index/stars.png" alt="stars rating">
							</div>
						</div>
						<div class="testimonial">
							<p>Upholstery Doctor has provided me with awesome know how personal touch assistance for over 10 years. They are the only upholstery shop I would recommend to anyone.</p>
							<div class="rating">
								<span>Honesty</span>
								<img src="images/index/stars.png" alt="stars rating">
							</div>
						</div>
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