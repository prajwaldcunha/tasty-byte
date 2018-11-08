<?php
require  'connect.php';
require 'functions.php';
session_start();

$stmt = "SELECT name,price,imageurl,details,quantity,price,manufacturedate,pickup_address,city FROM MyGuests";
$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Products</title>
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

</head>

<body data-spy="scroll" data-target="#site-navbar" data-offset="150">

	<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
		<div class="container">
			<a class="navbar-brand" href="../index.php"><div style="color: black;">TastyByte</div></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> <div style="color: black;">Menu</div>
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
								<a class="dropdown-item" href="../php/order.php">My Orders</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../php/logout.php">Logout</a>
							</div>
						</li>
					<?php endif;?>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<section class="site-section bg-light" >

		<div class="container">
			<div class="row">
				<h2>My products</h2>
			</div>
		</div>


		<?php

		if ($result->num_rows > 0) {
    // output data of each row
			while($row = $result->fetch_assoc()) {
				echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
			}
		} else {
			echo "0 results";
		}

		?>

		
		<div class="container-grid">


			<div class="level">
				<div class="level-name">
					<h3 class="prodName">Product name</h3>
				</div>
				<img src="https://source.unsplash.com/230x160/?london,building">
				<div class="prodDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt sapiente perferendis porro cumque, temporibus nobis sequi corporis beatae iste dolor dolores deserunt tempora, maxime debitis, velit, minima quod aut. Minima.</div>
				<div class="quantity">Quantity : 1 Kg</div>
				<div class="manuDate">Manuafavture Date : 25/12/2018</div>
				<div class="Price">Rs 1500</div>
				<div class="Pick up Address">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt sapiente perferendis porro cumque, temporibus nobis sequi corporis beatae iste dolor dolores deserunt tempora, maxime debitis, velit, minima quod aut. Minima.</div>
				<div class="city">City : Mangalore</div>
			</div>


			<div class="level">
				<h3>Views of Paris</h3>
				<img src="https://source.unsplash.com/230x160/?paris,building">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt sapiente perferendis porro cumque, temporibus nobis sequi corporis beatae iste dolor dolores deserunt tempora, maxime debitis, velit, minima quod aut. Minima.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt sapiente perferendis porro cumque, temporibus nobis sequi corporis beatae iste dolor dolores deserunt tempora, maxime debitis, velit, minima quod aut. Minima.</p>
			</div>
			<div class="level">
				<h3>Views of Madrid</h3>
				<img src="https://source.unsplash.com/230x160/?madrid,building"> <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt sapiente perferendis porro cumque, temporibus nobis sequi corporis beatae iste dolor dolores deserunt tempora, maxime debitis, velit, minima quod aut. Minima.</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
			</div>
			<div class="level">
				<h3>Views of Berlin</h3>
				<img src="https://source.unsplash.com/230x160/?berlin,building"> <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt sapiente perferendis porro cumque, temporibus nobis sequi corporis beatae iste dolor dolores deserunt tempora, maxime debitis, velit, minima quod aut. Minima.</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt sapiente perferendis porro cumque, temporibus nobis sequi corporis beatae iste dolor dolores deserunt tempora, maxime debitis, velit, minima quod aut. Minima.</p>
			</div>
			<div class="level">
				<h3>Views of Brussels</h3>
				<img src="https://source.unsplash.com/230x160/?brussels,building"> <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt sapiente perferendis porro cumque, temporibus nobis sequi corporis beatae iste dolor dolores deserunt tempora, maxime debitis, velit, minima quod aut. Minima.</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt sapiente perferendis porro cumque, temporibus nobis sequi corporis beatae iste dolor dolores deserunt tempora, maxime debitis, velit, minima quod aut. Minima.</p>
			</div>
			<div class="level">
				<h3>Views of Rome</h3>
				<img src="https://source.unsplash.com/230x160/?rome,building"> <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt sapiente perferendis porro cumque, temporibus nobis sequi corporis beatae iste dolor dolores deserunt tempora, maxime debitis, velit, minima quod aut. Minima.</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt sapiente perferendis porro cumque, temporibus nobis sequi corporis beatae iste dolor dolores deserunt tempora, maxime debitis, velit, minima quod aut. Minima.</p>
			</div>
		</div>
	</section>




	
</body>
</html>


