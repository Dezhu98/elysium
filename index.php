<?php
	session_start();
	session_unset();
	$_SESSION['numar_note'] = 0;
?>


<!DOCTYPE html>
<html lang="en">
	<!-- head-->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Home | Elysium</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/pe-icons.css" rel="stylesheet">
		<link href="css/prettyPhoto.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<script src="js/jquery.js"></script>
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="images/ico/favicon.ico">
		<link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" href="images/ico/apple-touch-icon-57x57.png">

		<script type="text/javascript">
		jQuery(document).ready(function($){
		'use strict';
			jQuery('body').backstretch([
				"images/bg/bg1.jpg",
				"images/bg/bg2.jpg"
			], {duration: 5000, fade: 500, centeredY: true });

			$("#mapwrapper").gMap({ controls: false,
				scrollwheel: false,
				markers: [{
					latitude:40.7566,
					longitude: -73.9863,
				icon: { image: "images/marker.png",
					iconsize: [44,44],
					iconanchor: [12,46],
					infowindowanchor: [12, 0] } }],
				icon: {
					image: "images/marker.png",
					iconsize: [26, 46],
					iconanchor: [12, 46],
					infowindowanchor: [12, 0] },
				latitude:40.7566,
				longitude: -73.9863,
				zoom: 14 });
		});
		</script>
	</head>
	<!--body-->
	<body>
		<div id="preloader"></div>
		<section id="main-slider" class="no-margin">
			<div class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="item active">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<div class="carousel-content center centered">
										<img src='images/logo/logo.png'/><br/>
										<h2 class="boxed animation animated-item-1 fade-down">Music is the strongest form of magic</h2><br/>
										<p class="boxed animation animated-item-2 fade-up" style='font-size:30px;'>Record|Create|Print</p>
										<br>
										<a class="btn btn-md animation bounce-in" href="record.php">Get Started Now!</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--used js scripts -->
		<script src="js/plugins.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.prettyPhoto.js"></script>
		<script src="js/init.js"></script>
	</body>
</html>
