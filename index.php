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
							<span>Learn<br>More</span>
							<!-- <div class="circle">
							</div> -->
						</a>
					</div>
					<div id="home-intro-decor">
						<span></span>
						<img src="images/index/scissors.png" >
					</div>
				</div>
			</div>
			<div id="content-container">
				<div id="content">
					<!-- <div id="video-wrapper">
						<iframe width="560" height="315" src="//www.youtube.com/embed/QoUEKJxU3mE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
					</div> -->
					<!-- <iframe width="100%" height="720" src="//www.youtube.com/embed/VTE0Mfb-hCY?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe> -->
					<div id="content-left">
						 <div id="video-wrapper">
							<iframe width="560" height="315" src="//www.youtube.com/embed/QoUEKJxU3mE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
						</div>
						<p><span>Upholstery Doctor</span> has been providing quality upholstery services since 2005. However, the doctor and his staff have more than 20 years of experience in the industry. We provide repair, re-upholstery, and custom work on furniture, automibles, boats, ATVs, and RVs. We garuntee quality, honesty, and excellent customer service.</p>
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
							<p>Upholstery Doctor has provided me with awesome know how personal touch assistance for over 10 years. They are the only upholstery shop I would reccommend to anyone.</p>
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