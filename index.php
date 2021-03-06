<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>TastyByte</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="apple-touch-icon" sizes="57x57" href="images/icons2/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/icons2/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/icons2/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/icons2/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/icons2/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/icons2/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/icons2/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/icons2/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/icons2/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="images/icons2/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/icons2/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/icons2/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/icons2/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/icons2/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

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
			
				<!-- If any feedback is given by user-->
				<?php if(isset($_SESSION['querysuccess'])) { 
						echo $_SESSION['querysuccess'];
						$_SESSION['querysuccess'] = null;
					  }?>

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
						<p>TastyByte connects neighbours and relatives by helping them to share the delicious and healthy food with each other. If you love food and hate waste, care about the environment or want to connect with your community, TastyByte is for you.</p>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
						<img src="images/about_img_1.jpg" alt="About" class="img-fluid">
					</div>
				</div>
			</div>
		</section>
		<!-- END section -->

		<section class="site-section bg-light" id="section-contact">
			<div class="container">
				<div class="row">

					<div class="col-md-12 text-center mb-5 site-animate">
						<h2 class="display-4">Get In Touch</h2>
						<div class="row justify-content-center">
							<div class="col-md-7">
								<p class="lead">Fill this out so we can learn more about you and your needs.</p>
							</div>
						</div>
					</div>

					<div class="col-md-7 mb-5 site-animate">
						<form method="post" action="php/queries.php">
							<div class="form-group">
								<label for="name" class="sr-only">Name</label>
								<input type="text" class="form-control" name="name" id="name" placeholder="Name" <?php if(isset($_SESSION['username'])):?> value="<?php echo $_SESSION['username']; endif;?>" required="">
							</div>
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Email" <?php if(isset($_SESSION['email_id'])):?> value="<?php echo $_SESSION['email_id']; endif;?>" required="">
							</div>
							<div class="form-group">
								<label for="message" class="sr-only">Message</label>
								<textarea id="message" cols="30" rows="10" class="form-control" name="message" placeholder="Write your message" required=""></textarea>
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
								<p>TastyByte connects neighbours and relatives by helping them to share the delicious and healthy food with each other. If you love food and hate waste, care about the environment or want to connect with your community, TastyByte is for you.</p>
							</div>

							<div class="col-md-4 site-animate">
								<h2 class="site-heading-2">Contact</h2>
								<p>Vamanjoor, Mangaluru<br/>+91 9911223344</p>
							</div>
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


											<!-- Button -->
											<div class="control-group">
												<label class="control-label" for="signin"></label>
												<div class="controls">
													<button id="signin" name="signin" class="btn btn-primary btn-block" type="submit">Log In</button>
												</div>
											</div>
										</fieldset>
									</form>

									<?php if(isset($_SESSION['script'])) { 
											echo $_SESSION['script']; 
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
													<label class="label" for="date">Password(min. 8 characters)</label></div>
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
											<form class="form-horizontal" action="index.php">
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