<?php
require  'connect.php';
require 'functions.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>TastyByte</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="../css/googleapis.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="../css/animate.css">

	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<link rel="stylesheet" href="../css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="../css/jquery.timepicker.css">

	<link rel="stylesheet" href="../css/icomoon.css">
	<link rel="stylesheet" href="../css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="../js/countryStateCity.js"></script>

</head>
<body data-spy="scroll" data-target="#site-navbar" data-offset="200">

	<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
		<div class="container">
			<a class="navbar-brand" href="../index.php">TastyByte</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="site-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="../index.php" class="nav-link active">Home</a></li>
				
					<?php if (isset($_SESSION['username'])):?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php echo $_SESSION['username'];?>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#section-cart">Cart</a>
								<a class="dropdown-item" href="#section-products">My Products</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../php/logout.php">Logout</a>
							</div>
						</li>
						<?endif?>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END nav -->


		<section class="site-cover" style="background-image: url(../images/background.jpg);" id="section-home">
			<div class="container">
				<div class="row align-items-center justify-content-center text-center site-vh-100">
					<div class="col-md-12">
						<h1 class="ml5">
							<span class="text-wrapper">
								<span class="line line1"></span>
								<span class="letters letters-left">WELCOME TO TASTY BYTE</span>
								<span class="line line2"></span>
							</span>
						</h1>

						<h2 class="h5 site-subheading mb-5 site-animate">Real Taste, Real Food!</h2> 
						<?php if (!isset($_SESSION['username'])):?>

							<p><button href="https://tasty-byte.azurewebsites.net/" class="btn btn-outline-white btn-lg site-animate" data-toggle="modal" data-target=".log-sign">Sign In/Register</button></p> 
						<?php endif; ?>


						<!-- <p><a href="https://tasty-byte.azurewebsites.net/" target="_blank" class="btn btn-outline-white btn-lg site-animate" data-toggle="modal" data-target="#reservationModal">Register</a></p> -->


					</div>
				</div>
			</div>
		</section>
		<!-- END section -->
		
		
		<?php if (isset($_SESSION['username'])):?>
			<section class="site-section bg-light" id="section-order">
				<div class="container">

					<div class="row">
						<div class="col-md-12 text-center mb-5 site-animate">
							<h2 class="display-4">Your Orders</h2>
							<div class="row justify-content-center">
								<div class="col-md-7">
									<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="owl-carousel site-owl">

								<div class="item">
									<div class="media d-block mb-4 text-center site-media site-animate border-0">
										<img src="../images/offer_1.jpg" alt="TastyByte" class="img-fluid" style="height: 250px;">
										<div class="media-body p-md-5 p-4">
											<h5 class="text-primary">Rs.100.00</h5>
											<h5 class="mt-0 h4">Paneer Roll</h5>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>

											<p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Check Details</a></p>
										</div>
									</div>
								</div>

								<div class="item">
									<div class="media d-block mb-4 text-center site-media site-animate border-0">
										<img src="../images/offer_2.jpg" alt="TastyByte" class="img-fluid">
										<div class="media-body p-md-5 p-4">
											<h5 class="text-primary">Rs.50.00</h5>
											<h5 class="mt-0 h4">Egg with Garlic </h5>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>

											<p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Check Details</a></p>
										</div>
									</div>
								</div>

								<div class="item">
									<div class="media d-block mb-4 text-center site-media site-animate border-0">
										<img src="../images/pastasalad.jpeg" alt="TastyByte" class="img-fluid" style="height: 250px;">
										<div class="media-body p-md-5 p-4">
											<h5 class="text-primary">Rs.50.00</h5>
											<h5 class="mt-0 h4">Caprese Pasta Salad</h5>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>

											<p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Check Details</a></p>
										</div>
									</div>
								</div>

								<div class="item">
									<div class="media d-block mb-4 text-center site-media site-animate border-0">
										<img src="../images/offer_1.jpg" alt="TastyByte" class="img-fluid" style="height: 250px;">
										<div class="media-body p-md-5 p-4">
											<h5 class="text-primary">Rs.100.00</h5>
											<h5 class="mt-0 h4">Paneer Roll</h5>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>

											<p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Check Details</a></p>
										</div>
									</div>
								</div>

								<div class="item">
									<div class="media d-block mb-4 text-center site-media site-animate border-0">
										<img src="../images/offer_2.jpg" alt="TastyByte" class="img-fluid">
										<div class="media-body p-md-5 p-4">
											<h5 class="text-primary">Rs.50.00</h5>
											<h5 class="mt-0 h4">Egg with Garlic </h5>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>

											<p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Check Details</a></p>
										</div>
									</div>
								</div>

								<div class="item">
									<div class="media d-block mb-4 text-center site-media site-animate border-0">
										<img src="../images/pastasalad.jpeg" alt="TastyByte" class="img-fluid" style="height: 250px;">
										<div class="media-body p-md-5 p-4">
											<h5 class="text-primary">Rs.50.00</h5>
											<h5 class="mt-0 h4">Caprese Pasta Salad</h5>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>

											<p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Check Details</a></p>
										</div>
									</div>
								</div>

								<div class="item">
									<div class="media d-block mb-4 text-center site-media site-animate border-0">
										<img src="../images/offer_1.jpg" alt="TastyByte" class="img-fluid" style="height: 250px;">
										<div class="media-body p-md-5 p-4">
											<h5 class="text-primary">Rs.100.00</h5>
											<h5 class="mt-0 h4">Paneer Roll</h5>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>

											<p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Check Details</a></p>
										</div>
									</div>
								</div>

								<div class="item">
									<div class="media d-block mb-4 text-center site-media site-animate border-0">
										<img src="../images/offer_2.jpg" alt="TastyByte" class="img-fluid">
										<div class="media-body p-md-5 p-4">
											<h5 class="text-primary">Rs.50.00</h5>
											<h5 class="mt-0 h4">Egg with Garlic </h5>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>

											<p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Check Details</a></p>
										</div>
									</div>
								</div>

								<div class="item">
									<div class="media d-block mb-4 text-center site-media site-animate border-0">
										<img src="../../images/pastasalad.jpeg" alt="TastyByte" class="img-fluid" style="height: 250px;">
										<div class="media-body p-md-5 p-4">
											<h5 class="text-primary">Rs.50.00</h5>
											<h5 class="mt-0 h4">Caprese Pasta Salad</h5>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>

											<p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Check Details</a></p>
										</div>
									</div>
								</div>



							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- END section -->
		<?php endif; ?>

	</body>
</html>	