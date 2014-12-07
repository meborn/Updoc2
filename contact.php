<?php include('includes/form-valid.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Contact | Upholstery Doctor</title>
		<meta charset="utf-8">
  		<meta name="viewport" content= "initial-scale=1">

		<link rel="stylesheet" href="style/contact.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="style/style.css" type="text/css" media="all"/>
		<script src="https://maps.googleapis.com/maps/api/js"></script>
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
										echo "Your message failed. Please check for errors";
									}
								}
								
							?>
						</h1>
					</div>
					<div id="contact-info">
						<div id="contact-address">
							<h1>Address & Directions</h1>
							<h2>Upholstery Doctor</h2>
							<em>1478 South 270 East</em>
							<br>
							<em>St. George, Utah 84790</em>
							<h3>(435) 705-0675</h3>
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
						<textarea rows="6" cols="50" id="contact-message" name="message" value="<?php echo $message;?>"></textarea>

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