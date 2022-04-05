<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Go Tours</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/fontawesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
          <div class="container">
              <a class="navbar-brand" href="#">ISure</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="show-menu">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="about.php">about</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="services.php">Service</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="contact.php">contact us</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="#" data-toggle="modal" data-target=#login><i class="far fa-user"></i></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>

<div class="modal" id="login">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body p-3 text-center">
            <?php
             if (isset($_SESSION['userId'])){
               echo $_SESSION['userEmail'];
               echo '<p>Your now login</p>';
             }
             ?>

              <?php
               if (isset($_SESSION['userId'])){
                 echo ' <form action="includes/logout.inc.php" method="post">
                      <button type="submit" name="logout-submit" class="btn btn-success">Logout</button>
                      </form>';
               }else{
                 echo      '      <form class="form-register" action="includes/login.inc.php" method="post">
                                  <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="mailuid" placeholder="Enter your email">
                                  </div>
                                  <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="pwd" placeholder="Enter your password">
                                  </div>
                                  <button type="submit" name="login-submit" class="btn btn-success">Login</button>
                                  <button class="btn btn-danger"><a href="register.php">Sign up</a></button>
                                </form>';
               }
               ?>
            </div>
    </div>
  </div>
</div>

      <header id="home">
          <div class="overlay">
              <div class="container">
                  <div>
                      <h1><span>Services</span></h1>
                      <h3><br>Our best services<br>in our new destination</h3>
                      <button><a href="booknow.php" class="text-uppercase">book now</a></button>
                  </div>
              </div>
          </div>
      </header>

      <div class="container text-center p-5">
        <h1>More Services</h1>
        <p><small>Take a tour of Ilocos Sur where you can relieve that stress and take away all your worries, even just for a while.
           The views will surely take your breath away and make your heart flutter.</small></p>
      </div>

      <div class="container mb-5">
        <div class="row">
          <div class="col-lg-3 col-md-12 col-sm-12">
            <div class="sign-bg">
            </div>
          </div>
          <div class="col-lg-9">
            <div class="row">
              <div class="col">
                <div class="container py-4 px-5 mb-4" style="background-color:	#e7e5e5;">
                  <i class="fas fa-plane-departure pb-3" style="font-size:50px;"></i>
                  <h6>Easy & Free Transport</h6>
                  <p><small>Instant reservation or booking facilities of flights, tour packages etc.</small></p>
                </div>
                <div class="container py-4 px-5" style="background-color:	#e7e5e5;">
                  <i class="fas fa-utensils pb-3" style="font-size:50px;"></i>
                  <h6>Delicious Food</h6>
                  <p><small>The Ilocanos (people living in Ilocos) are known in the country for serving some of the best dishes in the Philippines.</small></p>
                </div>
              </div>
              <div class="col">
                <div class="container py-4 mb-4" style="background-color:	#e7e5e5;">
                  <i class="fas fa-swimming-pool pb-3" style="font-size:50px;"></i>
                  <h6>Beach and Resort</h6>
                  <p><small>With no shortage of gorgeous beaches and green jungle-covered,
                    Ilocos Sur is a fun place to spend a vacation.</small></p>
                </div>
                <div class="container py-4" style="background-color:	#e7e5e5;">
                  <i class="fas fa-place-of-worship pb-3" style="font-size:50px;"></i>
                  <h6>Place of Worship</h6>
                  <p><small>- Ilocos is known for its old churches.
                     One worth mentioning is the St. Augustine Church popularly known as Paoay Church</small></p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid testimonial">
        <div class="container-fluid tes-overlay">
          <h2>WE ARE ISURE TRAVEL AGENCY </h2>
          <p>Ilocos remains to be one of the top tourist destinations in the
             Philippines, despite the fact that it is located in the northernmost part of Luzon.</p>
             <a href="register.php" class="btn btn-success p-2 mt-3">Book now</a>
        </div>
      </div>



      <footer>
          <div class="container">
              <ul>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
              </ul>
              <div class="row">
                  <div class="col-lg-3 col-md-6 col-12">
                      <div class="item">
                          <h4 class="text-uppercase">Contact us</h4>
                          <p class="address">
                            Contact us: Isurephilippines@gmail.com
                          </p>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                      <div class="item">
                          <h4 class="text-uppercase">additional links</h4>
                          <ul>
                              <li><a href="#">Home</a></li>
                              <li><a href="#">About Us</a></li>
                              <li><a href="#">Services</a></li>
                              <li><a href="#">Contact us</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                      <div class="item date">
                          <h4 class="text-uppercase">resent posts</h4>
                          <p><a href="#">01/03/2019</a></p>
                          <p><a href="#">08/05/2019</a></p>
                          <p><a href="#">01/03/2019</a></p>
                          <p><a href="#">08/05/2019</a></p>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                      <div class="item">
                          <h4 class="text-uppercase">newsletter</h4>
                          <form>
                              <input type="text" placeholder="Name">
                              <input type="email" placeholder="Email">
                              <input type="submit" value="Submit">
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <div class="copyright text-center">
              <p>Copyright 2019  Design by <a href="https://html.design">Free Html Templates</a></p>
          </div>
      </footer>


      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script>
          $(function () {

              'use strict';

              var winH = $(window).height();

              $('header').height(winH);

              $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));

              $('.navbar ul li a.search').on('click', function (e) {
                  e.preventDefault();
              });
              $('.navbar a.search').on('click', function () {
                  $('.navbar form').fadeToggle();
              });


          })
      </script>
  </body>
</html>
