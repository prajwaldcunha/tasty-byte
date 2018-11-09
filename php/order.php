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

</head>
<body data-spy="scroll" data-target="#site-navbar" data-offset="200">

	<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
		<div class="container">
			<a class="navbar-brand" href="../index.php">TastyByte</a>

			<div class="collapse navbar-collapse" id="site-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="../index.php" class="nav-link active">Home</a></li>
					<li class="nav-item active"><a href="menu.php" class="nav-link active">Menu</a></li>

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
				<div class="card-deck">
					  <div class="card">
					    <img class="card-img-top" src="../images/offer_1.jpg" alt="Card image cap">
					    <div class="card-body">
					      <h5 class="card-title">Card title</h5>
						  <a href="#" class="btn btn-primary">Details</a>
					    </div>
					  </div>
					  <div class="card">
					    <img class="card-img-top" src="../images/offer_2.jpg" alt="Card image cap">
					    <div class="card-body">
					      <h5 class="card-title">Card title</h5>
						  <a href="#" class="btn btn-primary">Details</a>
					    </div>
					  </div>
					  <div class="card">
					    <img class="card-img-top" src="../images/offer_3.jpg" alt="Card image cap">
					    <div class="card-body">
					      <h5 class="card-title">Card title</h5>
						  <a href="#" class="btn btn-primary">Details</a>
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