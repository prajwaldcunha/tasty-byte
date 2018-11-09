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
	<link rel="stylesheet" href="../css/grid_layout.css">
	<link rel="stylesheet" type="text/css" href="../css/deco.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body data-spy="scroll" data-target="#site-navbar" data-offset="200">

	<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
		<div class="container">
			<a class="navbar-brand" href="../index.php"><div style="color: black;">TastyByte</div></a>
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
								<a class="dropdown-item" href="myProduct.php">My Products</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="logout.php">Logout</a>
							</div>
						</li>
					<?php endif;?>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->


	<?php if (isset($_SESSION['username'])):?>
	

		<section class="site-section bg-light" id="section-order">
			<div class="container">
			<ul>
			<li><a href="#">View</a></li>
			<li class="drop">
				<a href="#">You</a>
				
				<div class="dropdownContain">
					<div class="dropOut">
						<div class="triangle"></div>
						<ul>
							<li>Plan</li>
							<li>Account Settings</li>
							<li>Switch Account</li>
							<li>Sign Out</li>
						</ul>
					</div>
				</div>
			
			</li>
			<li><a href="#">Help</a></li>
		</ul>

				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="thumbnail">
								<a href="#"><img class="card-img-top" src="../images/menu_1.jpg" alt=""></a>
								<h4 style="color: #fffff0;">Wedding Bells Decorators</h4>
								<div class="container">

									<!-- Trigger the modal with a button -->
									<button type="button" class="btn btn-info btn-sm continfo" data-toggle="modal" data-target="#ModalDetails">Details</button>
									<p style="color: white; display: inline; float: right;">Order Date: 08-11-2018</p>

									<!-- Modal -->
									<div class="modal fade" id="ModalDetails" role="dialog">
										<div class="modal-dialog modal-md">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Wedding Bells Decorators</h4>
												</div>
												<div class="modal-body">
													<p>Product Name: Pulav</p>
													<p>Price: Rs. 50</p>
													<p>Seller Name: Prajwal</p>
													<p>Phone: 9874563210</p>
													<p>Email: Weddingbellsmlr@gmail.com</p>
													<p>Pickup Address: Derebail, Mangalore</p>
													<p>Manufacture Date: 08-11-2018</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
					</div>

				</div>
			</div>
		</section>
		<!-- END section -->
	<?php endif; 
		// SELECT name, imageurl, details, quantity, price, manufacturedate, pickup_address, city, fname, lname, email, phoneno 
		// FROM users u, products p
		//  WHERE p.uid = u.id AND  p.pid = (SELECT pid 
		//									FROM orders o
		//                                  WHERE o.uid = $_SESSION['uid'] )






	?>

	<!-- loader -->
	<div id="site-loader" class="show fullscreen">
		<svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
		</svg>
	</div>
	<script src="../js/anime.min.js"></script>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.easing.1.3.js"></script>
	<script src="../js/jquery.waypoints.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
	<script src="../js/jquery.timepicker.min.js"></script>
	<script src="../js/jquery.animateNumber.min.js"></script>
	<script src="../js/main.js"></script>

</body>
</html>	