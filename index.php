<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>TastyByte</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="css/googleapis.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">

	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/countryStateCity.js"></script>

</head>
<body data-spy="scroll" data-target="#site-navbar" data-offset="200">

	<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">TastyByte</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="site-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="#section-home" class="nav-link active">Home</a></li>
					<li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
					<li class="nav-item"><a href="php/menu.php" class="nav-link">Menu</a></li>
					<li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li>
					<?php if (isset($_SESSION['username'])):?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php echo $_SESSION['username'];?>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="php/order.php">My Orders</a>
								<a class="dropdown-item" href="php/myProduct.php">My Products</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="php/logout.php">Logout</a>
							</div>
						</li>
						<?endif?>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END nav -->


		<section class="site-cover" style="background-image: url(images/background1.jpg);" id="section-home">
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

		<section class="site-section" id="section-about">
			<div class="container">
				<div class="row">
					<div class="col-md-5 site-animate mb-5">
						<h4 class="site-sub-title">Our Story</h4>
						<h2 class="site-primary-title display-4">Welcome</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet. Sed labore ipsum vel dolore, quis, culpa et magni autem sequi facere eos tenetur, ex?</p>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
						<img src="images/about_img_1.jpg" alt="About" class="img-fluid">
					</div>
				</div>
			</div>
		</section>
		<!-- END section -->

		<?php if (isset($_SESSION['username'])):?>
			<section class="site-section" id="section-products">
				<div class="container">
					<div class="row site-custom-gutters">

						<div class="col-md-12 text-center mb-5 site-animate">
							<h2 class="display-4">My Products</h2>
							<div class="row justify-content-center">
								<div class="col-md-7">
									<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
								</div>
							</div>
						</div>


						<div class="container">

							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProdModal">
								Add Product
							</button>

							<!-- The Modal -->
							<div class="modal fade" id="addProdModal">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">

										<!-- Modal Header -->
										<div class="modal-header">
											<h4 class="modal-title"> Add Product</h4>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>

										<!-- Modal body -->
										<div class="modal-body">

											<div class="form-style-10">
												<h1>Product details</h1>
												<form action="php/addProduct.php" method="post" enctype="multipart/form-data">
													
													<div class="section"><span>1</span>Item details</div>
													<div class="inner-wrap">
														<label>Product name <input type="text" name="prodName" required="" maxlength="256" /></label>
														<label>Product description <textarea name="prodDesc" required="" maxlength="150" rows="4"></textarea></label>
														<label>Quantity<input type="number" name="quantity" required="" min="1" value="1"/></label>                  
														<label>Date of manufacture <input type="date" name="dateOfManufacture" required=""  /></label>      
														<label>Price <input type="text" name="price" required="" pattern="[0-9]+" /></label>
														<label>Pickup Address <input type="text" name="pickup_address" required=""/></label>
														<label>City 
																<select name="city" required="">
																	<option selected><?php echo $_SESSION['city'];?></option>
																	<option>Bangalore</option>
																	<option>Mysore</option>
																	<option>Mumbai</option>
																	<option>Delhi</option>
																	<option>Hyderabad</option>
																	<option>Ahmedabad</option>
																	<option>Chennai</option>
																	<option>Kolkata</option>
																	<option>Surat</option>
																	<option>Pune</option>
																</select>
														</label>
													</div>
													<div class="section"><span>2</span>Item Photographs</div>
													<div class="inner-wrap">


														<div class="group">
															<span class="errormessage"><?php 
																if(isset($_SESSION['fileUploadFail'])) { 
																	echo $_SESSION['fileUploadFail']; 
																	unset($_SESSION['fileUploadFail']);
																}
																if(isset($_SESSION['fileUploadError_1'])){
																	echo $_SESSION['fileUploadError_1']; 
																	unset($_SESSION['fileUploadError_1']);

																}
																if(isset($_SESSION['fileUploadError'])){
																	echo $_SESSION['fileUploadError']; 
																	unset($_SESSION['fileUploadError']);

																}

																?>
																
															</span>
														</div>




														<label>Product images <input type="file" name="imageToUpload" required="" /></label>
													</div>

													<div class="button-section">
														<input type="submit" name="submit" value="Submit" />
														
													</div>
												</form>
												<?php if(isset($_SESSION['script_addProd_modal'])) { echo $_SESSION['script_addProd_modal']; 
											$_SESSION['script_addProd_modal'] = null;
										} ?>
											</div>


										</div>

										<!-- Modal footer -->
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

		<section class="site-section bg-light" id="section-contact">
			<div class="container">
				<div class="row">

					<div class="col-md-12 text-center mb-5 site-animate">
						<h2 class="display-4">Get In Touch</h2>
						<div class="row justify-content-center">
							<div class="col-md-7">
								<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
							</div>
						</div>
					</div>

					<div class="col-md-7 mb-5 site-animate">
						<form method="post">
							<div class="form-group">
								<label for="name" class="sr-only">Name</label>
								<input type="text" class="form-control" id="name" placeholder="Name">
							</div>
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="text" class="form-control" id="email" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="message" class="sr-only">Message</label>
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write your message"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary btn-lg" value="Send Message">
							</div>
						</form>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-4 site-animate">
						<p><img src="images/about_img_1.jpg" alt="" class="img-fluid"></p>
						<p class="text-black">
							Address: <br> Vamanjoor <br> Mangaluru <br> <br>
							Phone: <br> +91 9911223344 <br> <br>
							Email: <br> <a href="mailto:info@tastybyte.com">info@tastybyte.com</a>
						</p>

					</div>

				</div>
			</div>
		</section>
		<!-- END section -->


		<footer class="site-footer site-bg-dark site-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4 site-animate">
								<h2 class="site-heading-2">About Us</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet. Sed labore ipsum vel dolore, quis, culpa et magni autem sequi facere eos tenetur, ex?</p>
							</div>

							<div class="col-md-4 site-animate">
								<h2 class="site-heading-2">Contact</h2>
								<p>Vamanjoor, Mangaluru<br/>+91 9911223344</p>
							</div>
							<div class="col-md-2 site-animate">
								<div class="site-footer-widget mb-4">
									<h2 class="site-heading-2">Useful links</h2>
									<ul class="list-unstyled">
										<li><a href="#" class="py-2 d-block">Foods</a></li>
										<li><a href="#" class="py-2 d-block">Drinks</a></li>
										<li><a href="#" class="py-2 d-block">Breakfast</a></li>
										<li><a href="#" class="py-2 d-block">Brunch</a></li>
										<li><a href="#" class="py-2 d-block">Dinner</a></li>
									</ul>
								</div>
							</div>

						</div>
						<div class="row site-animate">
							<div class="col-md-12 text-center">
								<div class="site-footer-widget mb-4">
									<ul class="site-footer-social list-unstyled ">
										<li class="site-animate"><a href="#"><span class="icon-twitter"></span></a></li>
										<li class="site-animate"><a href="#"><span class="icon-facebook"></span></a></li>
										<li class="site-animate"><a href="#"><span class="icon-instagram"></span></a></li>
									</ul>
								</div>
							</div> 
						</div>
					</div>
				</footer>

				<!-- Modal -->
				<div class="modal fade bs-modal-sm log-sign" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">

							<div class="bs-example bs-example-tabs">
								<ul id="myTab" class="nav nav-tabs">
									<li id="tab1" class=" active tab-style login-shadow "><a href="#signin" class="active" data-toggle="tab">Log In</a></li>
									<li id="tab2" class=" tab-style "><a href="#signup" data-toggle="tab">Sign Up</a></li>

								</ul>
							</div>
							<div class="modal-body modal-body-login">
								<div id="myTabContent" class="tab-content">

									<div class="tab-pane fade active in show" id="signin">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<small>CLOSE </small><span aria-hidden="true">&times;</span>
										</button>
										<form class="form-horizontal" action="php/login.php" method="post">
											<fieldset>
												<!-- Sign In Form -->
												<!-- Text input-->

												<div class="group">
													<input required="" class="input" type="text" name="email"><span class="highlight"></span><span class="bar"></span>
													<label class="label" for="date">Email address</label></div>


													<!-- Password input-->
													<div class="group">
														<input required="" class="input" type="password" name="password"><span class="highlight"></span><span class="bar"></span>
														<label class="label" for="date">Password</label>
													</div>
													<em>minimum 6 characters</em>

													<!-- display error message-->
													<div class="group">
														<span class="errormessage"><?php if(isset($_SESSION['validation_error'])) { echo $_SESSION['validation_error']; }?></span>
													</div>

													<div class="forgot-link">
														<a href="#forgot" data-toggle="modal" data-dismiss="modal" data-target="#forgot-password"> I forgot my password</a>
													</div>


													<!-- Button -->
													<div class="control-group">
														<label class="control-label" for="signin"></label>
														<div class="controls">
															<button id="signin" name="signin" class="btn btn-primary btn-block" type="submit">Log In</button>
														</div>
													</div>
												</fieldset>
											</form>

											<?php if(isset($_SESSION['script'])) { echo $_SESSION['script']; 
											$_SESSION['script'] = null;
										} ?>

									</div>


									<div class="tab-pane fade" id="signup">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<small>CLOSE </small><span aria-hidden="true">&times;</span>
										</button>
										<form class="form-horizontal" id="myform" action="php/register.php" method="post">
											<fieldset>
												<!-- Sign Up Form -->
												<!-- Text input-->
												<div class="group">
													<input required="" class="input" type="text" name="fname" value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : "";  ?>"><span class="highlight"></span><span class="bar"></span>
													<label class="label" for="date">First Name</label></div>

													<!-- Text input-->
													<div class="group">
														<input required="" class="input" type="text" name="lname" value="<?php if(isset($_POST['lname'])) { echo $_POST['lname']; }  ?>"><span class="highlight"></span><span class="bar"></span>
														<label class="label" for="date">Last Name</label></div>

													<!-- display error message-->
													<div class="group">
														<span class="errormessage"><?php if(isset($_SESSION['email_unique_error'])) { echo $_SESSION['email_unique_error']; 
																																	  $_SESSION['email_unique_error']=null;
																																	}?></span>
													</div>
														<!-- email input-->
														<div class="group">
															<input required="" class="input" type="email" name="email"><span class="highlight"></span><span class="bar"></span>
															<label class="label" for="date">Email</label></div>

															<!-- Text input-->
															<div class="group">
																<input required="" class="input" type="password" name="password"><span class="highlight"></span><span class="bar"></span>
																<label class="label" for="date">Password(minimum 8 characters)</label></div>
																<em>1-8 Characters</em>
																
																<!-- phone number input-->
														<div class="group">
															<input required="" class="input" type="text" pattern="[1-9]{1}[0-9]{9}" title="Enter 10 digit number"  name="phoneno" value="<?php echo isset($_POST['phoneno']) ? $_POST['phoneno'] : "" ;?>"><span class="highlight"></span><span class="bar"></span>
															<label class="label" for="date">Phone Number</label></div>


																<!-- Set State-->

																<div class="group2">
																	<span class="highlight"></span><span class="bar"></span>
																	<!--<label class="label" for="date">State</label>-->
																	<select name="state" required="" class="input" id="state" onchange="setcity()">
																		<option value="Karnataka">Karnataka</option>
																		<option value="Kerala">Kerala</option>
																		<option value="Maharashtra">Maharashtra</option>
																		</select>
																	</div>
																	
																	<div class="group2">
																	<span class="highlight"></span><span class="bar"></span>
																	<!--<label class="label" for="date">State</label>-->
																	<select name="city"  id="city"  required="" class="input">
																		<option value="">Please select a city</option>
																		</select>
																	</div>

																	<!-- Text input-->
																<div class="group">
																	<input required="" class="input" type="text" name="locality" ><span class="highlight"></span><span class="bar"></span>
																	<label class="label" for="date">Locality</label></div>



																	<!-- Button -->
																	<div class="control-group">
																		<label class="control-label" for="confirmsignup"></label>
																		<div class="controls">
																			<button id="confirmsignup" name="confirmsignup" class="btn btn-primary btn-block">Sign Up</button>
																		</div>
																	</div>
																</fieldset>
															</form>
															<?php if(isset($_SESSION['email_script'])) { 
																			echo $_SESSION['email_script']; 
																			$_SESSION['email_script'] = null;
																		} ?>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<center>
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													</center>
												</div>
											</div>
										</div>
									</div>



									<!--modal2-->

									<div class="modal fade bs-modal-sm" id="forgot-password" tabindex="0" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<h4 class="modal-title" id="myModalLabel">Password will be sent to your email</h4>
												</div>
												<div class="modal-body">
													<form class="form-horizontal" action="/php/connect.php">
														<fieldset>
															<div class="group">
																<input required="" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
																<label class="label" for="date">Email address</label></div>


																<div class="control-group">
																	<label class="control-label" for="forpassword"></label>
																	<div class="controls">
																		<button id="forpassword" name="forpassword" class="btn btn-primary btn-block">Send</button>
																	</div>
																</div>
															</fieldset>
														</form>

													</div>
												</div>

											</div>
										</div>


										<!-- loader -->
										<div id="site-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

										<script src="js/anime.min.js"></script>
										<script src="js/jquery.min.js"></script>
										<script src="js/popper.min.js"></script>
										<script src="js/bootstrap.min.js"></script>
										<script src="js/jquery.easing.1.3.js"></script>
										<script src="js/jquery.waypoints.min.js"></script>
										<script src="js/owl.carousel.min.js"></script>
										<script src="js/jquery.magnific-popup.min.js"></script>

										<script src="js/bootstrap-datepicker.js"></script>
										<script src="js/jquery.timepicker.min.js"></script>

										<script src="js/jquery.animateNumber.min.js"></script>

										<script src="js/main.js"></script>


									</body>
									</html>