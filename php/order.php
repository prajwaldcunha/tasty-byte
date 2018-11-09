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


	<?php if (isset($_SESSION['username'])):
		$sql = "SELECT name,price,imageurl,details,quantity,price,manufacturedate,pickup_address,city,fname,lname,email,phoneno,orderdate FROM products, users,orders WHERE uid=id AND orders.pid=products.id AND orders.uid = ".$_SESSION['uid'];
		$result = $conn->query($sql);
	?>	

		<section class="site-section bg-light" id="section-order">
			<div class="container">
				<div class="card-deck">
					<?php
					$i=0;
					if ($result->num_rows > 0):
   						 // output data of each row
						while($row = $result->fetch_array()):
							$i+=1;
							if($i%3==0) echo "<br/>";
					?>
					<div class="card">
						<img class="card-img-top" src="../images/offer_1.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title"><?php echo $row['name']; ?></h5>
							<p class="card-text">Order date : <?php echo $row['orderdate']; ?></p>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDetails">Details</button>
						</div>


						<!-- Button trigger modal -->


						<!-- Modal -->
						<div class="modal fade" id="modalDetails" tabindex="-1" role="dialog" aria-labelledby="modalDetailsTitle" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Product Details</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<ul>
											<li>Product Name : <?php echo $row['name']; ?></li>
											<li>Price :  Rs. <?php echo $row['price']; ?></li>
											<li>Quantity: <?php echo $row['quantity']; ?></li>
											<li>Date of manufacture : <?php echo $row['manufacturedate']; ?></li>
											<li>Seller Name : <?php echo $row['fname']." ".$row['lname']; ?></li>
											<li>PickUp Address : <?php echo $row['']; ?></li>
											<li>Phone number : <?php echo $row['phoneno']; ?></li>
											<li>Email id: <?php echo $row['email']; ?></li>
											<li>Order Date : <?php echo $row['orderdate']; ?> </li>
										</ul>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
						<?php
						endif;
						endwhile;
					 	?>
					
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