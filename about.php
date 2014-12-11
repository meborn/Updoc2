<!DOCTYPE html>
<html>
	<head>
		<title>About | Upholstery Doctor</title>
		<meta charset="utf-8">
  		<meta name="viewport" content= "initial-scale=1">

		<link rel="stylesheet" href="style/about.css" type="text/css" media="all"/>
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
		<?php $page = 'About' ?>
		<div id="container">
			<div id="header-container">
				<?php include('includes/header.php'); ?>
				<div id="header-intro">
					<h1>Who Are We?</h1>
				</div>
			</div>
			<div id="content-container">
				<?php include('includes/decor.php'); ?>
				<div id="content">
					<div id="content-left">
						 <div id="video-wrapper">
						 	<iframe width="560" height="315" src="//www.youtube.com/embed/2KAQ8_PnLR0?rel=0" frameborder="0" allowfullscreen></iframe>
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
				<!-- </div> -->
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