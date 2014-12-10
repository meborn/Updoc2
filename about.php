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
					<h1>Coming Soon...</h1>
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