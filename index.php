<?php
  require 'php/login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>TastyByte</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="googleapis.css" rel="stylesheet">
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

</head>
<body data-spy="scroll" data-target="#site-navbar" data-offset="200">

  <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">TastyByte</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="site-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="#section-home" class="nav-link active">Home</a></li>
          <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>
          <li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li>
          <?php if (isset($_SESSION['username'])):?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION['username'];?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#section-offer">My Orders</a>
                    <a class="dropdown-item" href="#section-news">Cart</a>
                    <a class="dropdown-item" href="#section-gallery">My Products</a>
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

  <section class="site-cover" style="background-image: url(images/background.jpg);" id="section-home">
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

          <p><button href="https://tasty-byte.azurewebsites.net/"  class="btn btn-outline-white btn-lg site-animate" data-toggle="modal" data-target=".log-sign">Sign In/Register</button></p> 
          <?php  endif; ?>


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
  <section class="site-section bg-light" id="section-offer">
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
                <img src="images/offer_1.jpg" alt="TastyByte" class="img-fluid" style="height: 250px;">
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
                <img src="images/offer_2.jpg" alt="TastyByte" class="img-fluid">
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
                <img src="images/pastasalad.jpeg" alt="TastyByte" class="img-fluid" style="height: 250px;">
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
                <img src="images/offer_1.jpg" alt="TastyByte" class="img-fluid" style="height: 250px;">
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
                <img src="images/offer_2.jpg" alt="TastyByte" class="img-fluid">
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
                <img src="images/pastasalad.jpeg" alt="TastyByte" class="img-fluid" style="height: 250px;">
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
                <img src="images/offer_1.jpg" alt="TastyByte" class="img-fluid" style="height: 250px;">
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
                <img src="images/offer_2.jpg" alt="TastyByte" class="img-fluid">
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
                <img src="images/pastasalad.jpeg" alt="TastyByte" class="img-fluid" style="height: 250px;">
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

  <section class="site-section" id="section-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center mb-5 site-animate">
          <h2 class="display-4">Delicious Menu</h2>
          <div class="row justify-content-center">
            <div class="col-md-7">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
            </div>
          </div>
        </div>

        <div class="col-md-12 text-center">

          <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
            <li class="nav-item site-animate">
              <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast" aria-selected="true">Breakfast</a>
            </li>
            <li class="nav-item site-animate">
              <a class="nav-link" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab" aria-controls="pills-lunch" aria-selected="false">Lunch</a>
            </li>
            <li class="nav-item site-animate">
              <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner" role="tab" aria-controls="pills-dinner" aria-selected="false">Dinner</a>
            </li>
          </ul>


          <div class="tab-content text-left">
            <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
              <div class="row">
                <div class="col-md-6 site-animate">
                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="TastyByte">
                    <div class="media-body">
                      <h5 class="mt-0">Salted Fried Chicken</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
                      <h6 class="text-primary menu-price">Rs.50.00</h6>
                      <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="TastyByte">
                    <div class="media-body">
                      <h5 class="mt-0">Italian Sauce Mushroom</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
                      <h6 class="text-primary menu-price">Rs.75.00</h6>
                      <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="TastyByte">
                    <div class="media-body">
                      <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
                      <h6 class="text-primary menu-price">Rs.50.00</h6>
                      <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                    </div>
                  </div>

                </div>
                <div class="col-md-6 site-animate">
                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="TastyByte">
                    <div class="media-body">
                      <h5 class="mt-0">Italian Sauce Mushroom</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
                      <h6 class="text-primary menu-price">Rs.100.00</h6>
                      <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="TastyByte">
                    <div class="media-body">
                      <h5 class="mt-0">Salted Fried Chicken</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
                      <h6 class="text-primary menu-price">Rs.100.00</h6>
                      <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="TastyByte">
                    <div class="media-body">
                      <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
                      <h6 class="text-primary menu-price">Rs.100.00</h6>
                      <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
              <div class="row">
                <div class="col-md-6 site-animate">

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="TastyByte">
                    <div class="media-body">
                      <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
                      <h6 class="text-primary menu-price">Rs.75.50</h6>
                      <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="TastyByte">
                    <div class="media-body">
                      <h5 class="mt-0">Salted Fried Chicken</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
                      <h6 class="text-primary menu-price">Rs.75.00</h6>
                      <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="TastyByte">
                    <div class="media-body">
                      <h5 class="mt-0">Italian Sauce Mushroom</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
                      <h6 class="text-primary menu-price">Rs.100.00</h6>
                      <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                    </div>
                  </div>

                </div>
                <div class="col-md-6 site-animate">

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="TastyByte">
                    <div class="media-body">
                      <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
                      <h6 class="text-primary menu-price">Rs.50.00</h6>
                      <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="TastyByte">
                    <div class="media-body">
                      <h5 class="mt-0">Italian Sauce Mushroom</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
                      <h6 class="text-primary menu-price">Rs.50.00</h6>
                      <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="TastyByte">
                    <div class="media-body">
                      <h5 class="mt-0">Salted Fried Chicken</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
                      <h6 class="text-primary menu-price">Rs.50.00</h6>
                      <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                    </div>
                  </div>


                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
              <div class="row">
                <div class="col-md-6 site-animate">

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="TastyByte">
                    <div class="media-body">
                      <h5 class="mt-0">Italian Sauce Mushroom</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
                      <h6 class="text-primary menu-price">Rs.75.00</h6>
                      <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="TastyByte">
                    <div class="media-body">
                      <h5 class="mt-0">Salted Fried Chicken</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
                      <h6 class="text-primary menu-price">Rs.50.00</h6>
                      <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="TastyByte">
                    <div class="media-body">
                      <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
                      <h6 class="text-primary menu-price">Rs.50.00</h6>
                      <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                    </div>
                  </div>

                </div>
                <div class="col-md-6 site-animate">

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="TastyByte">
                    <div class="media-body">
                      <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
                      <h6 class="text-primary menu-price">Rs.100.0</h6>
                      <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="TastyByte">
                    <div class="media-body">
                      <h5 class="mt-0">Italian Sauce Mushroom</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
                      <h6 class="text-primary menu-price">Rs.75.0</h6>
                      <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="TastyByte">
                    <div class="media-body">
                      <h5 class="mt-0">Salted Fried Chicken</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
                      <h6 class="text-primary menu-price">Rs.100.0</h6>
                      <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
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

#CART
 <?php if (isset($_SESSION['username'])):?>
  <section class="site-section bg-light" id="section-news">
    <div class="container">

      <div class="row">
        <div class="col-md-12 text-center mb-5 site-animate">
          <h2 class="display-4">Items on Cart</h2>
          <div class="row justify-content-center">
            <div class="col-md-7">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="media d-block mb-4 text-center site-media site-animate">
            <img src="images/offer_1.jpg" alt="TastyByte" class="img-fluid">
            <div class="media-body p-md-5 p-4">
              <h5 class="mt-0 h4">Paneer Roll</h5>
              <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>

              <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Remove from Cart</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="media d-block mb-4 text-center site-media site-animate">
            <img src="images/offer_2.jpg" alt="TastyByte" class="img-fluid">
            <div class="media-body p-md-5 p-4">
              <h5 class="mt-0 h4">Italian Special</h5>
              <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>

              <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Remove from Cart</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="media d-block mb-4 text-center site-media site-animate">
            <img src="images/offer_3.jpg" alt="TastyByte" class="img-fluid">
            <div class="media-body p-md-5 p-4">
              <h5 class="mt-0 h4">Noodles</h5>
              <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet.</p>

              <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Remove from Cart</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->
  #END CART

  <section class="site-section" id="section-gallery">
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

        <div class="col-md-4 site-animate">
          <a href="images/menu_1.jpg" class="site-thumbnail image-popup">
            <img src="images/menu_1.jpg" alt="TastyByte" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 site-animate">
          <a href="images/menu_2.jpg" class="site-thumbnail image-popup">
            <img src="images/menu_2.jpg" alt="TastyByte" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 site-animate">
          <a href="images/menu_3.jpg" class="site-thumbnail image-popup">
            <img src="images/menu_3.jpg" alt="TastyByte" class="img-fluid">
          </a>
        </div>

        <div class="col-md-4 site-animate">
          <a href="images/menu_2.jpg" class="site-thumbnail image-popup">
            <img src="images/menu_2.jpg" alt="TastyByte" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 site-animate">
          <a href="images/menu_3.jpg" class="site-thumbnail image-popup">
            <img src="images/menu_3.jpg" alt="TastyByte" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 site-animate">
          <a href="images/menu_1.jpg" class="site-thumbnail image-popup">
            <img src="images/menu_1.jpg" alt="TastyByte" class="img-fluid">
          </a>
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
          <form action="" method="post">
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
            <li id="tab1" class=" active tab-style login-shadow "><a href="#signin" data-toggle="tab">Log In</a></li>
            <li id="tab2" class=" tab-style "><a href="#signup" data-toggle="tab">Sign Up</a></li>
            
          </ul>
        </div>
        <div class="modal-body">
          <div id="myTabContent" class="tab-content">
           
            <div class="tab-pane fade active in" id="signin">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>CLOSE </small><span aria-hidden="true">&times;</span>
              </button>
              <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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
              </div>
              
              
              <div class="tab-pane fade" id="signup">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>CLOSE </small><span aria-hidden="true">&times;</span>
                </button>
                <form class="form-horizontal">
                  <fieldset>
                    <!-- Sign Up Form -->
                    <!-- Text input-->
                    <div class="group">
                      <input required="" class="input" type="text" name="fname"><span class="highlight"></span><span class="bar"></span>
                      <label class="label" for="date">First Name</label></div>
                      
                      <!-- Text input-->
                      <div class="group">
                        <input required="" class="input" type="text" name="lname"><span class="highlight"></span><span class="bar"></span>
                        <label class="label" for="date">Last Name</label></div>
                        
                        <!-- Password input-->
                        <div class="group">
                          <input required="" class="input" type="email" name="email"><span class="highlight"></span><span class="bar"></span>
                          <label class="label" for="date">Email</label></div>
                          
                          <!-- Text input-->
                          <div class="group">
                            <input required="" class="input" type="password" name="password"><span class="highlight"></span><span class="bar"></span>
                            <label class="label" for="date">Password</label></div>
                            <em>1-8 Characters</em>
                            
                            <div class="group2">
                              <input required="" class="input" type="text" name="country"><span class="highlight"></span><span class="bar"></span>
                              <label class="label" for="date">Country</label></div>
                              
                              
                              
                              <!-- Button -->
                              <div class="control-group">
                                <label class="control-label" for="confirmsignup"></label>
                                <div class="controls">
                                  <button id="confirmsignup" name="confirmsignup" class="btn btn-primary btn-block">Sign Up</button>
                                </div>
                              </div>
                            </fieldset>
                          </form>
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
                  <button id="forpasswodr" name="forpassword" class="btn btn-primary btn-block">Send</button>
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
  

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>

  <script src="js/main.js"></script>

  
</body>
</html>