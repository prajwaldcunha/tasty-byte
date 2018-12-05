<?php
require  'connect.php';
require 'functions.php';
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Menu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="../css/googleapis.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="../css/animate.css">

	<link rel="apple-touch-icon" sizes="57x57" href="../images/icons2/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../images/icons2/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../images/icons2/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../images/icons2/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../images/icons2/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../images/icons2/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../images/icons2/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../images/icons2/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../images/icons2/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="../images/icons2/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../images/icons2/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../images/icons2/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../images/icons2/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="../images/icons2/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<link rel="stylesheet" href="../css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="../css/jquery.timepicker.css">

	<link rel="stylesheet" href="../css/icomoon.css">
	<link rel="stylesheet" href="../css/style.css">

	<link rel="stylesheet" href="../css/product.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<script>
		function showCity(str) {
			if (str == "") {
				document.getElementById("cities").innerHTML = "";
				return;
			} else { 
				if (window.XMLHttpRequest) {
	            // code for IE7+, Firefox, Chrome, Opera, Safari
	            xmlhttp = new XMLHttpRequest();
	        } else {
	            // code for IE6, IE5
	            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	        }
	        xmlhttp.onreadystatechange = function() {
	        	if (this.readyState == 4 && this.status == 200) {
	        		document.getElementById("cities").innerHTML = this.responseText;
	        	}
	        };
	        xmlhttp.open("GET","displayMenu.php?city="+str,true);
	        xmlhttp.send();
	    }
	}
		function alertfunc(){
			alert("Please Login/Register to continue");
			window.location.href = "../index.php";
			
		}
</script>



</head>

<body data-spy="scroll" data-target="#site-navbar" data-offset="150">

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
								<a class="dropdown-item" href="order.php">My Orders</a>
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




	<section class="site-section bg-light" id="section-order">
		<div class="container">
			<div class="headingBtn">
				<h2>Menu</h2>
			
				<form>
				  <div class="styled-select yellow rounded">
					<select name="users" onchange="showCity(this.value)">
						<option value="">Select a city:</option>
						<option value="Mangalore">Mangalore</option>
						<option value="Mysore">Mysore</option>
						<option value="Hubli">Hubli</option>
						<option value="Bangalore">Bangalore</option>
					</select>
				  </div>
				</form>
				
				<?php if(isset($_SESSION['orderScript'])) { 
						echo $_SESSION['orderScript']; 
						$_SESSION['orderScript'] = null;
					} ?>
			</div>
		</div>
		<br>
		<br>
		<div class="container">
			<div id="cities"></div>
		</div>
	</section>
	<!-- END section -->

	<!--Order food modal-->
	<div class="modal fade" id="orderInfo" tabindex="-1" role="dialog" aria-labelledby="modalDetailsTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Order Details</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p><?php if(isset($_SESSION['orderInfo'])) { echo $_SESSION['orderInfo']; $_SESSION['orderInfo'] = null;  } ?></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
							<!--end-->


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