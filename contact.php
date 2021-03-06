<?php include('includes/form-valid.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Contact Upholstery Doctor | Southern Utah Upholstery & Repair</title>
		<meta charset="utf-8">
  		<meta name="viewport" content= "initial-scale=1">
  		<meta name="description" content="Contact Upholstery Doctor for automotive & furniture upholstery. We provide upholstery & repair services for automotive, furniture, ATVs, RVs, boats and more.">
		<link rel="stylesheet" href="style/contact.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="style/style.css" type="text/css" media="all"/>
		<link rel="icon" type="image/png" href="images/favicon.png">
		<script src="https://maps.googleapis.com/maps/api/js"></script>
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
		<?php $page = 'Contact' ?>
		<div id="container">
			<div id="header-container">
				<?php include('includes/header.php'); ?>
				<div id="header-intro">
					<h1>Say Hello.</h1>
				</div>
			</div>
			<div id="content-container">
				<?php include('includes/decor.php'); ?>
				<div id="content">
					<div id="email-message">
						<h1>
							<?php
								if ($_SERVER["REQUEST_METHOD"] == "POST") {
									if($message_sent) {
										echo "Your message has been sent.";
										$name = $email = $phone = $message = "";
									}
									else {
										echo "Your message failed. Please check for errors.";
									}
								}
								
							?>
						</h1>
					</div>
					<div id="contact-info">
						<div id="contact-address">
							<h1>Address & Directions</h1>
							<h2>Upholstery Doctor</h2>
							<span class="address">1478 South 270 East</span>
							<br>
							<span class="address">St. George, Utah 84790</span>
							<br>
							<span class="hours">Monday - Friday </span>
							<span class="hours">8:30am - 6:00pm</span>
							<h3>(435) 705-0675</h3>
							<div id="contact-type">
								<span>Call</span>
								<img src="images/dot.png" alt="dot">
								<span>Click</span>
								<img src="images/dot.png" alt="dot">
								<span>Text</span>
							</div>
						</div>
						<div id="map_canvas">

						</div>
					</div>
					<form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						<h1>Ask Us A Question</h1>
						<span class="label">Name</span>
						<span class="error"><?php echo $nameErr;?></span><br>
						<input id="contact-name" class="contact-input" type="text" name="name" value="<?php echo $name;?>"><br>

						<span class="label">Phone</span>
						<span class="error"><?php echo $phoneErr;?></span><br>
						<input id="contact-phone" class="contact-input" type="text" name="phone" value="<?php echo $phone;?>"><br>
						
						<span class="label">Email</span>
						<span class="error"><?php echo $emailErr;?></span><br>
						<input id="contact-email" class="contact-input" type="text" name="email" value="<?php echo $email;?>"><br>
						
						<span class="label">Message</span>
						<br>
						<textarea rows="6" cols="50" id="contact-message" name="message"></textarea>

						<br>
						<input id="contact-submit" type="submit" value="Send">
					</form>
				</div>
			</div>
			<div id="footer-container">
				<?php include('includes/footer.php'); ?>
			</div>
			<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
			<script src="js/contact.js"></script>
			<script src="js/mobile-menu.js"></script>
		</div>
		<?php include('includes/mobile-menu.php'); ?>
	</body>
</html>