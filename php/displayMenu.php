<?php
require  'connect.php';
require 'functions.php';
session_start();
?>

<html lang="en">
<head>
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

<body>
	<?php
	$city = cleanInput($_GET['city']);
	$sql  = "SELECT products.id as pid,name,imageurl,details,quantity,price,manufacturedate,pickup_address,products.city,fname,lname,email,phoneno FROM products, users WHERE products.uid=users.id AND products.city='".$city . "' AND soldout = 0 AND products.uid NOT IN (SELECT users.id FROM users WHERE users.id = " . $_SESSION['uid'] . ")";
	$result = $conn->query($sql);
	?>
	
	<div class="container">
		<div class="row">
			<?php
			$i=0;
			if ($result->num_rows > 0):
   						 // output data of each row
				while($row = $result->fetch_array()):
					$i++;
					$_SESSION['pid']=$row['pid'];

					$time=strtotime($row['manufacturedate']);
					$mdate=date('m/d/Y',$time);
					?>
					<div class="col-sm-4">
						<div class="card">
							<img class="card-img-top" src="<?php echo $row['imageurl'];?>" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title"><?php echo $row['name']; ?></h5>
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDetails<?php echo $i;?>">Details</button>
								<?php
								if (isset($_SESSION['username'])):?>
								<form method="POST" action="writeOrder.php">
								<input type="submit" name="btnOrder" class="btn btn-primary" value="Order Now!" ></input>
								</form>
								<?php 
								else:?>
								<button type="button" class="btn btn-primary" id="myBtn" onclick="alertfunc()">Order now</button>
								
								<?php endif;?>
								
							</div>
							
							
							
							<!--Order food modal-->
							<div class="modal fade" id="modalEnterOrder1" tabindex="-1" role="dialog" aria-labelledby="modalDetailsTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLongTitle">Order Details</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<p><?php echo $_SESSION['orderInfo'];?></p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											
										</div>
									</div>
								</div>
							</div>
							<!--end-->


							<!-- Button trigger modal -->


							<!-- Modal -->
							<div class="modal fade" id="modalDetails<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="modalDetailsTitle" aria-hidden="true">
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
												<li>Date of manufacture : <?php echo $mdate; ?></li>
												<li>Seller Name : <?php echo $row['fname']." ".$row['lname']; ?></li>
												<li>PickUp Address : <?php echo $row['pickup_address']; ?></li>
												<li>Phone number : <?php echo $row['phoneno']; ?></li>
												<li>Email id: <?php echo $row['email']; ?></li>
											</ul>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
					if($i%3==0):
						?>
					</div>
					<br/>
					<?php if($result->num_rows != $i):?>
						<div class="row">
							<?php
						endif;
					endif;

				endwhile;

				else:?>
				<p>There are no products in your area</p>
			<?php endif;?>

		</div>

	</body>
	</html>