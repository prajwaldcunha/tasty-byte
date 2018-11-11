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
	</script>
	
	
	
</head>

<body data-spy="scroll" data-target="#site-navbar" data-offset="150">

	<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
		<div class="container">
				<span class="oi oi-menu"></span> Menu
				</button>
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
			<div class="row">
				<h2>Menu</h2>	
					<p>
						<form>
							<select name="users" onchange="showCity(this.value)">
							<option value="">Select a city:</option>
							<option value="Mangalore">Mangalore</option>
							<option value="Mysore">Mysore</option>
							<option value="Hubli">Hubli</option>
							<option value="Bangalore">Bangalore</option>
							</select>
						</form>
						<br>
						<div id="cities"><b>Person info will be listed here.</b></div>
					</p>
			</div>
			<br/>
		</div>
	</section>
	<!-- END section -->

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


